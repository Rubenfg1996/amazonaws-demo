<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h1>Introducción a la programación orientada a objetos</h1>";
            echo "<h2>Ejemplo3: instanciar clase externa</h2>";
            //O include para que de warning y continue en vez de error
            //O include_once /require_once para que solo lo cargue una vez y no redeclare variables por error
            require ('contacto.php');
            $miContacto = new Contacto("Rubén","Fernández Galán",21,"ruben@ruben.com");
            
             echo "El contacto se llama $miContacto->nombre $miContacto->apellidos";
        ?>
    </body>
</html>
