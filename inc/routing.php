<?php

 $routes = [];

 function route(string $path, callable $callback) : void
 {
     global $routes;
     $routes[$path] = $callback;
 }

 function run() : void
 {
     global $routes;
     $uri = $_SERVER['REQUEST_URI'];
     foreach($routes as $path => $callback)
     {
         if($path !== $uri) continue;
         $callback();
     }
 }