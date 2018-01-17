<?php
namespace App\Controller;

use App\Model\Contacto as Contacto;
use App\Helper\ViewHelper; 

class ContactoController {
    
    public function index(){
        
        $contacto = new Contacto("Ruben","Fernández Galán",21,null);
        
        $contacto->setEmail("ruben@ruben.com");
        
        //Instancio el ViewHelper 
        
        $view = new ViewHelper();
        
        //Le paso los datos
        $view->vista("index", $contacto);
        
    }
}
