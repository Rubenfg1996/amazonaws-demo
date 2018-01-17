<?php
namespace App\Controller;

use App\Model\Contacto as Contacto;

class ContactoController {
    
    public function index(){
        
        $contacto = new Contacto("Ruben","Fernández Galán",21,null);
        
        $contacto->setEmail("ruben@ruben.com");
        
        require("view/index.php");
        
    }
}
