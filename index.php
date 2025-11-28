<?php 

 include "./http_variables.php";

 $parts = explode('/', $_SERVER["REQUEST_URI"]);

 if($parts[2] != "products"){
    http_response_code($NOT_FOUND);
    exit;
 }

 $id = $parts[3] ?? null;

 var_dump($id);