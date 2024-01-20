<?php

    define("ASC", "ASC");
    define("DESC", "DESC");

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

    function _WHERE($a, $b, $c, $d=""){
        if($a!="" && $b!="" && $c!=""){
            $status=1;
            $aa = explode(" ", $a);
            $bb = explode(" ", $b);
            $cc = explode(" ", $c);
            if(count($aa)>1||count($bb)>1||count($cc)>1){
                $status=0;
            }
            if($status==1){
                $b = $b=="==" ? "=" : $b;
                $c = is_int($c) ? "$c" : "'$c'";
                return array(
                    "query"=>" WHERE `".$a."` ".$b." ".$c." ".$d,
                    "approval"=>124354643423
                );
            }else{
                return "";
            }
        }else{
            return "";
        }
    }

    function _AND($a, $b, $c, $d=""){
        if($a!="" && $b!="" && $c!=""){
            $status=1;
            $aa = explode(" ", $a);
            $bb = explode(" ", $b);
            $cc = explode(" ", $c);
            if(count($aa)>1||count($bb)>1||count($cc)>1){
                $status=0;
            }
            if($status==1){
                $b = $b=="==" ? "=" : $b;
                $c = is_int($c) ? "$c" : "'$c'";
                return " && `".$a."` ".$b." ".$c." ".$d;
            }else{
                return "";
            }
        }else{
            return "";
        }
    }

    function _OR($a, $b, $c, $d=""){
        if($a!="" && $b!="" && $c!=""){
            $status=1;
            $aa = explode(" ", $a);
            $bb = explode(" ", $b);
            $cc = explode(" ", $c);
            if(count($aa)>1||count($bb)>1||count($cc)>1){
                $status=0;
            }
            if($status==1){
                $b = $b=="==" ? "=" : $b;
                $c = is_int($c) ? "$c" : "'$c'";
                return " || `".$a."` ".$b." ".$c." ".$d;
            }else{
                return "";
            }
        }else{
            return "";
        }
    }

    function _LIMIT($number, $from=0){
        
        if(is_int($number)&&is_int($from)){
            return " LIMIT $number OFFSET $from";
        }else{
            return "";
        }

    }

    function _ORDER_BY($von, $ASC=ASC, $finaa=""){
        if($ASC==ASC || $ASC==DESC){

            
        if($von!=""){
            $status=1;
            $aa = explode(" ", $von);
            if(count($aa)>1){
                $status=0;
            }
            if($status==1){
                return "ORDER BY $von $ASC $finaa";
            }else{
                return "";
            }
        }else{
            return "";
        }
        }
    }

    function _inbetween($from, $start, $end=""){
        $end = $end=="" ? $start : $end;
        return explode($end, explode($start, $from)[1])[0];
    }
