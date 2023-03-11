<?php

  require_once './models/item_model.php';
  require_once './views/item_view.php';

  class ItemController 
  {
    private $itemView;
    private $itemModel;

    public function __construct()
    {
      $this->itemModel = new ItemModel();
      $this->itemView = new ItemView();
    }

    public function index()
    { 
      $items = $this->itemModel->index();
      $this->itemView->index($items); 
    }

    public function show($id)
    {
      $item = $this->itemModel->show($id);
      $this->itemView->show($item[0]);
    }
  }

?>
