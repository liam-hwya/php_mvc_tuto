<?php

    namespace App\Core;

    class Router{

        protected $routes = [

            'GET' => [],

            'POST' => []

        ];

        public function get($uri,$controller){

            $this->routes['GET'][$uri] = $controller;

        }

        public function post($uri,$controller){

            $this->routes['POST'][$uri] = $controller;

        }

        public static function load($file){

            $router = new static;

            require $file;

            return $router;

        }

        public function direct($uri,$requestMethod){

            if(array_key_exists($uri,$this->routes[$requestMethod])){

                return $this->callMethod(

                    ...explode('@',$this->routes[$requestMethod][$uri])

                );

            }

            throw new Exception('No routed defined for this URI');

        }


        public function callMethod($controller,$method){

            $controller = "App\\Controllers\\{$controller}";

            $controller = new $controller;


            if(!method_exists($controller,$method)){

                throw new Exception("Method not found in this controller");

            }

            return $controller->$method();
          
        }
        

    }

?>