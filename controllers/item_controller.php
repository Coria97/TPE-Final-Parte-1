<?php
  
  require_once './models/category_model.php';
  require_once './models/item_model.php';
  require_once './views/item_view.php';
  require_once './helpers/controller_helper.php';
  class ItemController 
  {
    private $itemView;
    private $itemModel;
    private $categoryModel;
    private $controllerHelper;

    public function __construct()
    {
      $this->itemModel = new ItemModel();
      $this->itemView = new ItemView();
      $this->categoryModel = new CategoryModel();
      $this->controllerHelper = new ControllerHelper();
    }

    public function index()
    { 
      $categories = $this->categoryModel->index();
      $items = $this->itemModel->index();
      $this->itemView->index($items, $categories); 
    }

    public function show($id)
    {
      $item = $this->itemModel->show($id);
      $this->itemView->show($item[0]);
    }

    public function create()
    {
      if ($this->controllerHelper->validateParams($_POST))
        $this->itemModel->create($_POST);
      $this->itemView->default_view();
    }

    public function delete($id)
    {
      $this->itemModel->delete($id);
      $this->itemView->default_view();
    }

    public function put($id)
    {
      $item = $this->itemModel->put($id,$_POST);
      $this->itemView->show($item[0]);
    }

    public function filter()
    {
      $categories = $this->categoryModel->index();
      $items = $this->itemModel->filter($_GET);
      $this->itemView->index($items, $categories);
    }
  }

?>
