<?php
   include_once '.\libs\Smarty.class.php';

  class ItemView
  {
    private $smarty;

    public function __construct()
    {
      $this->smarty = new Smarty();
    }

    public function index($items = null, $categories = null)
    { 
      $this->smarty->assign('categories', $categories);
      $this->smarty->assign('items', $items);
      $this->smarty->display('./templates/items.tpl'); 
    }

    public function show($item = null){
      $this->smarty->assign('item', $item);
      $this->smarty->display('./templates/item.tpl');
    }
    
    public function default_view()
    {
      header("Location: " . BASE_URL. "items");
    }
  }
?>
