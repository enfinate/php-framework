<?php
    $request = $_GET['url'] ?? '/';
    $request=explode("/", $request);
    if(count($request)>1){
        $get_variable=[];
        for($x=1;$x<count($request);$x++){ array_push($get_variable, $request[$x]); }
        define("get_variable", $get_variable);
        unset($get_variable);
    }
    $request = $request[0]=='' ? "/".$env['base_route'] : "/".$request[0];
    