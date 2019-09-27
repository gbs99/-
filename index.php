<?php
require_once 'config.php';


$reqUrl = $_SERVER['REQUEST_URI'];
$reqUrlSplit = explode("/",$reqUrl);
$controllerName = 'Home';
$actionName = 'Index';

if($reqUrlSplit[1]){
    $controllerName = $reqUrlSplit[1];
}
if($reqUrlSplit[2]){
    $actionName = $reqUrlSplit[2];
}

$path = 'Controllers\\'. $controllerName . 'Controller';
include 'AppCore/Controller.php';

foreach (glob("Controllers/*Controller.php") as $filename)
{   
    include $filename;
}


if(class_exists($path)){

    $controller = new $path;
    
    if(method_exists($path, $actionName)){

        $controller->$actionName();
    }
    else{
        include '404.php';
    }

}
else {
    include '404.php';
}







?>