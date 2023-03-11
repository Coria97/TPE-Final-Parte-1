<?php 
  require_once './models/category_model.php';
  require_once './views/category_view.php';

  class CategoryController
  {
    private $categoryModel;
    private $categoryView;

    public function __construct()
    {
      $this->categoryModel = new CategoryModel();
      $this->categoryView = new CategoryView();
    }

    public function index()
    {
      $categories = $this->categoryModel->index();
      $this->categoryView->index($categories);
    }

    public function showItems($id)
    {
      $categories = $this->categoryModel->index();
      $items = $this->categoryModel->showItems($id);
      $this->categoryView->showItems($items, $categories);
    }

    public function delete($id)
    {
      $this->categoryModel->delete($id);
      $this->categoryView->default_view();
    }
  }
?>
