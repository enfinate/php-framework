<?php
    namespace Route;
    $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
    class Variable{
        public $serv;
        public function __construct() {

            // $this->serv = array(
            //     "/"=>["RouteController", "index"],
            //     "/about"=>["RouteController", "about"],
            //     "/contact"=>["RouteController", "contact"],
            //     "/ather"=>["HomeController", "ahmed"],
            //     "/api"=>["APIController", "get"],
            //     "/sada"=>["DBController", "add"],
            // );

            $this->serv["/"] = ["RouteController", "index"];
            $this->serv["/about"]=["RouteController", "about"];
            $this->serv["/contact"]=["RouteController", "contact"];
            $this->serv["/ather"]=["HomeController", "ahmed"];
            $this->serv["/api"]=["APIController", "get"];
            $this->serv["/sada"]=["DBController", "add"];
            
        }
    }
    define("Routes", (new Variable)->serv);