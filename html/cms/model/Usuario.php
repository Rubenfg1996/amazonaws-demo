<?php
namespace App\Model;

class Usuario {
    var $id;
    var $usuario;
    var $clave;
    var $fechaAcceso;
    var $activo;
    var $permisosUsuarios;
    
    function __construct($data){
        $this->id = $data->id;
        $this->usuario = $data->usuario;
        $this->clave = $data->clave;
        $this->fechaAcceso = $data->fecha_acceso;
        $this->activo = $data->activo;
        $this->permisosUsuarios = $data->permisos_usuarios;
    }
    
}
