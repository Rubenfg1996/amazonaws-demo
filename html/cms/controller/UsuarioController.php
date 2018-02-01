<?php
namespace App\Controller;

use App\Model\Usuario;
use App\Helper\ViewHelper; 
use App\Helper\DbHelper;

class UsuarioController {
    
    var $db;
    function __construct() {
        //Inicializo la conexión
        $dbHelper = new DbHelper();
        $this->db = $dbHelper->db;
        //Instancio el ViewHelper 
        $viewHelper = new ViewHelper();
        $this->view = $viewHelper;
    }

    public function acceso(){
        
        //Inicializo el mensaje
        $mensaje = "Bienvenid@";
        //Comprobacion si ha rellenado el formulario
        if (isset($_POST['acceder'])){
            $usuario = filter_input(INPUT_POST,'usuario', FILTER_SANITIZE_STRING);
            $clave = filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if($usuario && $clave){
                //Compruebo que existe el usuario
                if ($this->compruebaUsuario($usuario,$clave)){
                    //Entro al panel
                    $mensaje = "Hola crack titan mastodonte";
                }else{
                    $mensaje="Usuario y/o contraseña incorrectos.<br>Vuelve a intentarlo";
                }
            }
        }
        
        //Le paso los datos a la vista
        $datos->mensaje = $mensaje;
        $this->view->vista("panel", $datos);
        
    }
    
    function compruebaUsuario($usuario, $calve){
        //Select con OBJ
        $resultado = $this->db->query("SELECT * FROM usuarios WHERE usuario='.$usuario.'");
        //Asigno consulta a una variable
        $data = $resultado->fetch(\PDO::FETCH_OBJ);
        //Return
        return ($data) ? 1 : 0;
    }
    
    public function index(){
        //Select con OBJ
        $resultado = $this->db->query('SELECT * FROM usuarios');
        while ($personas = $resultado->fetch(\PDO::FETCH_OBJ)){ //Recorro el resultado
            $data = $personas;
        }
        //print_r($data);
        $usuario = new Usuario($data);
        
        //Le paso los datos
        $this->view->vista("index", $usuario);
        
    }
}
