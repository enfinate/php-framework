<?php

    Class auth{
        private $guard;
        public function __construct($input)
        {
            $this->guard = $input;
        }
        public function Init($name, $auth){
            $value_stop=1;
            // print_r($this->guard[$name]['model']->Auth);
            $auth_allows = $this->guard[$name]['model']->Auth;
            $data_submurge = [];

            $table = strtolower(explode("\\", get_class($this->guard[$name]['model']))[2]);
            $test="";
            $apomemo="";
            
            foreach ($auth as $key => $value) {
                if(in_array($key, $auth_allows)){
                    $data_submurge[$key]=$value;

                    if($test==""){
                        $test.="WHERE";
                    }
                    $test.=$apomemo." `$key` = '$value'";
                    $apomemo=" &&";

                }else{
                    $data_submurge=[];
                    $value_stop=0;
                    break;
                }
            }

            if($value_stop){

                $query = "SELECT * FROM `$table` $test";
                // echo $query;
                // print_r($data_submurge);



            }

            // print_r($data_submurge);
        }
    }

    $Auth = new Auth($Guard);

    $Auth->Init("App", [
        "username"=>"hello",
        "pass"=>"ather"
    ]);