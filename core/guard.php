<?php
    global $Guard;
    $Guard = [
        "App"=>[
            "auth"=>["username", "password"],
            "model"=>new App\Model\User,
        ],
    ];
