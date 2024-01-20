<?php

    session_start();

    include_once "./register/model_directories.php";
    include_once "./parser.php";    
    include_once "./route/web.php";
    include_once "./core/methods.php";
    include_once "./core/hooks.php";

    $newpath="";
    if($path!="/"){
        if($path[strlen($path)-1]=="/"){
            for($i=0; $i < strlen($path)-1; $i++){
                $newpath.=$path[$i];
            }
        }else{
            $newpath=$path;
        }
    }else{
        $newpath = $path;
    }
    $path = $newpath;
    if (array_key_exists($path, Routes)) {
        if (file_exists("./app/controller/".Routes[$path][0].".php")) {
            foreach($variable as $e_m){include_once("./app/model/".$e_m.".php");}
            
            include_once "./core/guard.php";

            include_once "./core/auth/app.php";


            include_once "./core/Db.php";

            include_once("./app/controller/".Routes[$path][0].".php");

            $controller = new App\Contoller\Controller;
            $methodName = Routes[$path][1];
            
            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                throw new Exception("Method assigned to this route does not exist");
            }
        } else {
            throw new Exception("Controller is not found");
        }
    } else {
        throw new Exception("Route is not defined");
    }