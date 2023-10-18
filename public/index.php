<?php

require_once __DIR__.'./../vendor/autoload.php';


$routes = require_once __DIR__.'./../routes/web.php';

$requestUrl = explode("?",$_SERVER['REQUEST_URI'])[0];

[$controller,$method] = $routes[$requestUrl]??[null,null];

if($controller && $method){
    $controllerInstance = new $controller();
    $controllerInstance->$method();
}else{
    echo "Not Found"; 
}



