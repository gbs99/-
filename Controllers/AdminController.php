<?php 

namespace Controllers;

use AppCore\Controller;

Class AdminController extends Controller
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
    public function Login()
    {
        return $this->View();
       
    }


}





?> 