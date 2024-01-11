<?php

    include_once "./parser.php";

    include_once("./route/web.php");

    include_once("./core/methods.php");

    if (array_key_exists($path, Routes)) {

        if (file_exists("./app/controller/".Routes[$path][0].".php")) {

            include_once("./app/controller/".Routes[$path][0].".php");
                
            $controller = new App\Contoller\Controller;

            $methodName = Routes[$path][1];
            
            if (method_exists($controller, $methodName)) {
            
                $controller->$methodName();
            
            } else {
            
                echo "Method assigned to this route does not exist";
            
            }
        
        } else {
        
            echo "Controller is not found";
        
        }
    
    } else {
    
        echo "Route is not defined";
    
    }


    