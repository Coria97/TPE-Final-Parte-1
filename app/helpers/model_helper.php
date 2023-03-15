<?php

  class ModelHelper
  {
    public function __construct() {}

    public function buildQuery($id, $table, $params)
    {
      $query = "UPDATE ". $table ." SET ";
      $columns_to_update = array();
      foreach (array_keys($params) as $key) 
        if (!empty($params[$key])) 
          $columns_to_update[] = $key . "='" . $params[$key] . "'";
      $query .= implode(',', $columns_to_update);
      $query .= " WHERE id='".$id."'";
      return $query;
    }

    public function saveImage()
    {
      $fileTemp = $_FILES["image"]["tmp_name"];
      $filePath = "./images_upload/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
      move_uploaded_file($fileTemp, $filePath);
      return $filePath;
    }

  }
  
?>
