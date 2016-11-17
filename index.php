<?php
    require_once ('components/Router.php');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    define('ROOT', dirname(__FILE__));
    session_start();
    require_once ('/components/Autoload.php');
    require_once ('/controllers/SessionController.php');
  
    // Вызов Router
    $router = new Router();
    $router->run();
?>