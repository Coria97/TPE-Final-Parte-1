<?php
  
    //Definicion de la constante que tiene la URL BASE
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // lee la acción
    if (!empty($_GET['action']))
        $action = $_GET['action'];
    else
        $action = 'home'; // acción por defecto si no envían

    // parsea la accion    
    $params = explode('/', $action);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home': //Muestra el home de la pagina
            break;
        default:  //Caso default de la pagina
            echo('500 internal server error'); 
            break;
    }
?>