<?php

    require_once '../config/app.php';

    /** Charger les class **/
    require ROOT . DS . 'app' . DS . 'controller' . DS . 'HomeController.php';
    require ROOT . DS . 'app' . DS . 'VCard.php';
    require ROOT . DS . 'vendor' . DS . 'autoload.php';
    

    $controller = new HomeController();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->load();
    }


    $controller->index();