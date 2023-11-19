<?php
    include_once("./env.php");
    include_once("./utility/settings/extra.php");
    include_once("./routes/main.php");
    if (array_key_exists($request, $routes)) {
        $controllerName = $routes[$request];
        include_once 'redirects/' . $controllerName . '.php';
    } else {
        include 'resources/views/404.php';
    }
?>
