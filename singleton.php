<?php

class singleTon {
     private $config;
     static private $instance;
    
    private function __construct__() {
       
    }

    static public function getInstance(){
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone(){

    }

    public function getName(){
        echo "asadas";
    }

    private function __wakeup(){

    }
}

