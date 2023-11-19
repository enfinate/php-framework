<?php
    function components($comp){
        $compExp=str_replace(".","/",$comp);
        return include("resources/views/components/".$compExp.".php");
    }
    function view($comp){
        $compExp=str_replace(".","/",$comp);
        return include("resources/views/".$compExp.".php");
    }