<?php
    namespace App\Contoller;
    class Controller{
        public function __construct() {}

        public function ahmed(){
            // return view("welcome");
            if(isset($_GET['alomomola'])){
                echo $_GET['alomomola'];
            }else{
                redirect("");
            }
        }

    }
    $controller = new Controller;