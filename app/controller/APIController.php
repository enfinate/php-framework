<?php

    namespace App\Contoller;
    
    class Controller{
        public function __construct() {}

        public function get(){
            
            $varen = array(
                "fname"=>"Ather",
                "lname"=>"Shahid",
                "age"=>"22",
                "address"=>"J-112, Rufi Green City, Gulistan-e-Jauhar block 18",
                "city"=>"Karachi",
                "country"=>"Pakistan",
                "occupation"=>"Entreprenuer & Software engineer",
                "education"=>"bachelors",
            );

            header('Content-Type: application/json');

            echo json_encode($varen, true);
            
            exit();
        
        }
    }