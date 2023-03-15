<?php

  class ControllerHelper
  {
    public function __construct() {}

    public function validateParams($params)
    { 
      foreach (array_keys($params) as $key)
        if (empty($params[$key]))
          return false;
      return true;
    }

    public function validateFile($image)
    {
      $retorno = ($image == "image/jpg" || $image == "image/jpeg" || $image == "image/png") ? true : false;
      return ($image == "image/jpg" || $image == "image/jpeg" || $image == "image/png") ? true : false;
    }

    public function validateUploadParams($params)
    { 
      foreach (array_keys($params) as $key)
        if (!empty($params[$key]))
          return true;
      return false;
    }

  }

?>
