<?php
    namespace Core;
    use Exception;
    class hooks{

        private $dispatch = [];
        public function add($name, $callback){
            if(is_callable($callback)){
                if(!isset($this->dispatch[$name])){
                    $this->dispatch[$name][0] = $callback;
                }else{
                    $this->dispatch[$name][count($this->dispatch[$name])] = $callback;
                }
            }else{
                throw new Exception("You can only callback function in hooks");
            }
        }

        public function dispatch($name){
            foreach($this->dispatch[$name] as $callback){
                if(is_callable($callback)){
                    return call_user_func($callback);
                }else{
                    return $name;
                }
            }
        }
        
    }