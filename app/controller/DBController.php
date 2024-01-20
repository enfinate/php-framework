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

            // print_r($DB->RETRIEVE(_WHERE("id", "==", "4")));

            // $DB->UPDATE([
            //     "fullname"=>"mala"
            // ],
            //     _WHERE("id", ">", "12")
            // );

            // print_r(_inbetween("This is the 'heighlighted part'","'", "'"));

        }

    }