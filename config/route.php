<?php

    namespace Config;

    class Route
    {

        public $base;
        public $request;
        public $GET;

        function __construct($base_route)
        {
            $this->base = $base_route;
            $this->request = $_GET['url'] ?? '/';
            $this->request = explode("/", $this->request);
            $this->GET = [];

            if(count($this->request)>1){
                for($x=1;$x<count($this->request);$x++)
                { 
                    array_push($this->GET, $this->request[$x]); 
                }
            }else
            {
                $this->GET=[];
            }

        }

        public function redirect()
        {
            return $this->request[0]=='' ? "/" : "/".$this->request[0];
        }

    }

    