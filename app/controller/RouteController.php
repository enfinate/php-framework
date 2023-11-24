<?php

    namespace App\Controller;
    require_once './app/settings/base.php';

    class RouteController
    {

        function __construct(){}

        public function index()
        {
            return view('home');
        }

        public function about()
        {
            return view('about');
        }

    }

    