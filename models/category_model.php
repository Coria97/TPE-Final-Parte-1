<?php

  class CategoryModel
  { 
    private $db;

    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;port=3307;'.'dbname=db_ecommerce;charset=utf8','root','');
    }
    
    public function index()
    {
      $query = $this->db->prepare("SELECT * FROM Category c");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function showItems($id)
    {
      $query = $this->db->prepare("SELECT i.*, c.name 'category_name' FROM Item i INNER JOIN Category c ON c.id = i.fk_id_category WHERE i.fk_id_category = ?");
      $query->execute([$id]);
      return $query->fetchAll(PDO::FETCH_OBJ);
    }
  }
?>
