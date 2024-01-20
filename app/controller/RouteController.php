<?php

    namespace App\Contoller;

    use Core\Hooks;
    
    class Controller{
        public function __construct() {}

        public function index(){

            // return view("welcome");
            $hook = new Hooks;

            $hook->add("ather", functiON(){
                return 55;
            });

            echo $hook->dispatch("ather");

        }

        public function about(){
            return view("about");
        }

        public function contact(){
            return view("contact");
        }

    }