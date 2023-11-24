<?php

    require_once './env.php';
    require_once './route/main.php';

    if (array_key_exists(Route->redirect(), $route)) {
        $route[Route->redirect()]();
    } else {
        echo "<h1>404 Component not found</h1>";
    }