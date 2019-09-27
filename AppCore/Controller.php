<?php 

namespace AppCore;

Class Controller
{
    
    public function View()
    {
        
        $reqUrl = $_SERVER['REQUEST_URI'];
        $reqUrlSplit = explode("/",$reqUrl);
        $controllerName = $reqUrlSplit[1];
        $actionName = $reqUrlSplit[2];
        echo $controllerName ." / ";
        echo $actionName; 

    }



}




?>