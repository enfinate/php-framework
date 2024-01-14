<?php

    namespace App\Contoller;
    
    class Controller{
        public function __construct() {}

        public function index(){
            return view("welcome");
        }

        public function about(){
            return view("about");
        }

        public function contact(){
            return view("contact");
        }

    }