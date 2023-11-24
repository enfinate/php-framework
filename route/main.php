<?php

    require_once './config/route.php';
    require_once './app/controller/RouteController.php';
    require_once './app/settings/base.php';

    define("Routing", new App\Controller\RouteController());
    define("Route", new Config\Route($env['base_route']));

    $route=array(
        "/"=>function(){ Routing->index(); },
        "/about"=>function(){ Routing->about(); },
    );