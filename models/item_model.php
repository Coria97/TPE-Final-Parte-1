<?php

  class ItemModel
  { 
    private $db;

    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;port=3307;'.'dbname=db_ecommerce;charset=utf8','root','');
    }
    
    public function index()
    {
      $query = $this->db->prepare("SELECT i.*, c.name 'category_name' FROM Item i INNER JOIN Category c ON i.fk_id_category = c.id");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id){
      $query = $this->db->prepare("SELECT i.*, c.name 'category_name' FROM item i INNER JOIN Category c ON i.fk_id_category = c.id where i.id = ?");
      $query->execute([$id]);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($params)
    {
      $query = $this->db->prepare("INSERT INTO item (name, description, price, fk_id_category) VALUES (?,?,?,?)");
      $query->execute([$params['name'],$params['description'],$params['price'],$params['fk_id_category']]);
    }

    public function delete($id)
    {
      $query = $this->db->prepare("DELETE FROM item WHERE id = ?");
      $query->execute([$id]);   
    }
  }
?>
