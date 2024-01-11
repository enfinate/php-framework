<?php
    function view($view){
        return include("./resources/view/".str_replace(".", "/", $view).".php");
    }
    function redirect($redirect){
        return header("location: /$redirect");
    }
    function linked($path){

        $serverName = $_SERVER['SERVER_NAME'];
        $serverPort = $_SERVER['SERVER_PORT'];

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

        $serverUrl = $protocol . $serverName;

        if (($protocol === 'http://' && $serverPort != 80) || ($protocol === 'https://' && $serverPort != 443)) {
            $serverUrl .= ':' . $serverPort;
        }

        echo $serverUrl."/".$path;
    }

    // linked("ather");