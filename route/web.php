<?php
    namespace Route;
    $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
    class Variable{
        public $serv;
        public function __construct() {
            $this->serv = array(
                "/"=>["RouteController", "index"],
                "/about"=>["RouteController", "about"],
                "/ather"=>["HomeController", "ahmed"],
                "/api"=>["APIController", "get"],
            );
        }
    }
    define("Routes", (new Variable)->serv);

