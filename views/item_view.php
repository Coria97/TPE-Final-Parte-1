<?php
   include_once '.\libs\Smarty.class.php';

  class ItemView
  {
    private $smarty;

    public function __construct()
    {
      $this->smarty = new Smarty();
    }

    public function indexView($items)
    {
      $this->smarty->assign('items', $items);
      $this->smarty->display('./templates/items.tpl'); 
    }
  }
?>
