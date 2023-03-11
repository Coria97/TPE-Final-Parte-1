<?php
  include_once '.\libs\Smarty.class.php';

  class CategoryView
  {
    private $smarty;

    public function __construct()
    {
      $this->smarty = new Smarty();
    }

    public function index($categories)
    {
      $this->smarty->assign('categories', $categories);
      $this->smarty->display('./templates/categories.tpl'); 
    }
  }
?>