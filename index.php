<?php 

 include "./http_variables.php";

 $parts = explode('/', $_SERVER["REQUEST_URI"]);

 if($parts[1] != "products"){
    http_response_code($NOT_FOUND);
    exit;
 }