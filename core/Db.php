<?php
    namespace Core;

use Exception;

    class Db{
        private $host; private $user; private $pass; private $db; private $table;

        public function __construct($table, $env = ENV_DATA)
        {
            
            if(!($env['HOST']==""||$env['HOST']==null) && !($env['USER']==""||$env['USER']==null) && !($env['__DB']==""||$env['__DB']==null) ){
                $this->host = $env['HOST'];
                $this->user = $env['USER'];
                $this->pass = $env['PASS'];
                $this->db = $env['__DB'];
                $this->table = $table;
            }else{
                throw new Exception("Please set the envoirnment file before initializing your database");
            }
        }

        function INSERT($data){
            $class = explode("\\", get_class($this->table));
            $value="";
            foreach($class as $val){$var = $val;}
            $parser = 1;
            $added = "";
            $valer = "";
            $track="";
            foreach ($data as $key => $value) {
                if(!in_array($key, $this->table->columns)){
                    $parser=0;  
                }else{
                    $added.=$track."`".$key."`";
                    $valer.=$track."'".$value."'";
                }
                $track=", ";
            }
            if($parser===1){
                if($connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db)){
                    $data = mysqli_query($connection, "INSERT INTO `$var`($added) VALUES ($valer)");
                    mysqli_close($connection);
                }else{
                    throw new Exception("Failed to establish connection with database. Potential causes could be wrong database credentials.");
                };
            }
            return $data;
        }

        function RETRIEVE($clause=null){
        
            $class = explode("\\", get_class($this->table));

            foreach($class as $val){$var = $val;}

            $var = strtolower($var);

            $fetcheru = "";
            $comma="";

            foreach($this->table->columns as $column){
                $fetcheru.=$comma."`".$column."`";
                $comma=", ";
            };
            $query = $clause===null ? "SELECT $fetcheru FROM `$var`" : "SELECT $fetcheru FROM `$var` $clause[query]";

            if($clause!==null && $clause['approval'] !== 124354643423){
                $query = "SELECT $fetcheru FROM `$var`";
            }

            if($connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db)){
                $new = mysqli_query($connection, $query);
                mysqli_close($connection);
            }else{
                throw new Exception("Failed to establish connection with database. Potential causes could be wrong database credentials.");
            };

            $returnable = array();
            foreach($new as $a){array_push($returnable, $a);}
            return $returnable;
        }

        function UPDATE($data, $clause=null){
            $class = explode("\\", get_class($this->table));
            $value="";
            foreach($class as $val){$var = $val;}
            $var = strtolower($var);
            $parser = 1;
            $added = "";
            $track="";
            foreach ($data as $key => $value) {
                if(!in_array($key, $this->table->columns)){
                    $parser=0;  
                }else{
                    $added.=$track."`".$key."`='".$value."' ";
                }
                $track=", ";
            }
            if($parser===1){
                $var = strtolower($var);
                $query = $clause===null ? "UPDATE `$var` SET $added" : "UPDATE `$var` SET $added $clause[query]";

                if($clause !== null && $clause['approval'] !== 124354643423){
                    return 0;
                }else{
                    if($connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db)){
                        $data = mysqli_query($connection, $query);
                        mysqli_close($connection);
                    }else{
                        throw new Exception("Failed to establish connection with database. Potential causes could be wrong database credentials.");
                    };
                }
            }
            return $data;
        }
    }

    