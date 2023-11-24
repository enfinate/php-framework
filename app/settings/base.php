<?php
    function view($comp){
        $compExp=str_replace(".","/",$comp);
        return include("resources/view/".$compExp.".php");
    }