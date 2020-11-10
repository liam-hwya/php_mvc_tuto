<?php

    namespace App\Core;
    
    class App{

        protected static $registry = [];

        public static function bind($key,$value){

            static::$registry[$key] = $value;

        }


        public static function get($key){

            if(!array_key_exists($key,static::$registry)){

                throw new Exception ("Could not get the value with this key");

            }

            return static::$registry[$key];
          
        }
        

    }



?>