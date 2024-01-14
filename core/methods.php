<?php

    function view($view){
        return include("./resources/view/".str_replace(".", "/", $view).".php");
    }

    function include_view($view){
        include("./resources/view/".str_replace(".", "/", $view).".php");
    }

    function redirect($redirect){
        return header("location: /$redirect");
    }
    
    function linked($path){

        $serverName = $_SERVER['SERVER_NAME'];
        $serverPort = $_SERVER['SERVER_PORT'];

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

        $serverUrl = $protocol . $serverName;

        if (($protocol === 'http://' && $serverPort != 80) || ($protocol === 'https://' && $serverPort != 443)) 
        {
            $serverUrl .= ':' . $serverPort;
        }

        return $serverUrl."/".$path;
    }

    function array_to_json($array, $json=null){
        if($json===true){
            header('Content-Type: application/json');
        }
        return json_encode($array);
    }
