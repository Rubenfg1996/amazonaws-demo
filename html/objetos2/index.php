<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h1>Introducción a la programación orientada a objetos</h1>";
            echo "<h2>Ejemplo2: definir e instanciar clases</h2>";
            
            class Contacto{
                var $nombre;
                var $apellidos;
                var $edad;
                var $email;
                
                //Método constructor antiguo
                /*function Contacto($miNombre,$misApellidos,$miEdad,$miEmail){
                    $this->nombre = $miNombre;
                    $this->apellidos = $misApellidos;
                    $this->edad = $miEdad;
                    $this->email = $miEmail;
                }*/
                
                 function __construct($miNombre,$misApellidos,$miEdad,$miEmail){
                    $this->nombre = $miNombre;
                    $this->apellidos = $misApellidos;
                    $this->edad = $miEdad;
                    $this->email = $miEmail;
                }
            }
            
            //Instanciar clase
            
            $miContacto = new Contacto("Rubén","Fernández Galán",21,"ruben@ruben.com");
            
            echo "El contacto se llama $miContacto->nombre $miContacto->apellidos";
        ?>
    </body>
</html>
