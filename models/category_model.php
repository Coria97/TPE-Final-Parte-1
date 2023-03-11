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
  }
?>