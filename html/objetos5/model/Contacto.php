<?php

class Contacto {
    var $nombre;
    var $apellidos;
    var $edad;
    var $email;
    
    function __construct($miNombre,$misApellidos,$miEdad,$miEmail){
        $this->nombre = $miNombre;
        $this->apellidos = $misApellidos;
        $this->edad = $miEdad;
        $this->email = $miEmail;
    }
    
    function setEmail($miEmail){
        $this->email = $miEmail;
    }
    
    function getEmail(){
        return $this->email;
    }
}
