<?php

    namespace App\Model;

    class User{
        public $columns = [
            "id",
            "fullname",
            "username",
            "email",
            "pass"
        ];

        public $Auth = [
            "username",
            "pass",
        ];
    }