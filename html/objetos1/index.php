<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h1>Introducción a la programación orientada a objetos</h1>";
            echo "<h2>Ejemplo1: definir e instanciar clases</h2>";
            
            class Contacto{
                var $nombre;
                var $apellidos;
                var $edad;
                var $email;
                
                //Funciones y métodos
                function setNombre($miNombre){
                    $this->nombre = $miNombre;
                }

                function getNombre(){
                    return $this->nombre;
                }
            }

            //Instanciar o utilizar la clase

            $miContacto = new Contacto;

            //accedo a las funciones o metodos mediante $nombre_del_objeto->nombre_del_método

            $miContacto->setNombre("Rubén");

            echo "El contacto se llama ". $miContacto->getNombre();

            //o así

            echo "<br>El contacto se llama $miContacto->nombre";
        ?>
    </body>
</html>
