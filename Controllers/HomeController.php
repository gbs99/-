<?php 

namespace Controllers;

use AppCore\Controller;

Class HomeController extends Controller
{

    public function __construct()
    {
       
    }

    public function Index()
    {

        
       return $this->View();
    }

    public function About()
    {
        return $this->View();
       
    }

}





?> 