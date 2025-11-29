<?php 

 declare (strict_types= 1);

 spl_autoload_register(function($class) {
    require __DIR__ . "/src/controllers/$class.php";
 });

 header("Content-type: application/json; charset=UTF-8");

 include "./http_variables.php";

 $parts = explode('/', $_SERVER["REQUEST_URI"]);

 if($parts[2] != "products"){
    http_response_code($NOT_FOUND);
    exit;
 }

 $id = $parts[3] ?? null;

 $controller = new ProductController();

 $controller->processRequest($_SERVER["REQUEST_METHOD"], $id);