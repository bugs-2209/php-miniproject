<?php

    session_start();

    require './Core/Database.php';
    require './Controllers/BaseController.php';
    
    if (!empty($_SESSION['useradmin'])) {
        
        $controllerName = ucfirst(strtolower(($_REQUEST['controller'] ?? 'Auth')) . 'Controller');
        
    } else {
        $controllerName = "AuthController";
    }

    //GET action Controller
    $actionName = $_REQUEST['action'] ?? 'index';

    //Use Controller
    require "./Controllers/${controllerName}.php";
    
    //Khởi tạo object
    $controllerObject = new $controllerName;

    $controllerObject->$actionName();
