<?php
    namespace App\Contoller;

    use App\Model\User;
    use Core\Db;

    class Controller{
        public function __construct() {}

        public function add(){

            $DB = new Db(new User);

            // $DB->INSERT([
            //         "fullname"=>"Ather Shahid",
            //         "username"=>"athershahid",
            //         "email"=>"ather@gmail.com",
            //         "pass"=>"Ath123"
            // ]);

            // foreach($DB->RETRIEVE("id < 4") as $every){
            //     print_r($every);
            // }

            // $DB->UPDATE([
            //         "fullname"=>"Ahmed Shahid",
            //         "username"=>"asdasd",
            //         "pass"=>"arhytr31424324324"
            //     ]
            //     ,"id = 4"
            // );
            view("welcome");
            
        }

    }