<?php
  
  require_once './models/category_model.php';
  require_once './models/item_model.php';
  require_once './views/item_view.php';

  class ItemController 
  {
    private $itemView;
    private $itemModel;
    private $categoryModel;

    public function __construct()
    {
      $this->itemModel = new ItemModel();
      $this->itemView = new ItemView();
      $this->categoryModel = new CategoryModel();
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
      $this->itemModel->create($_POST);
      $this->itemView->create();
    }
  }

?>
