<?php
    echo "<h1>Introducción a la programación orientada a objetos<h1>";
    echo "<h2>Ejemplo de Modelo Vista Controlador<h2>";
    
    //Incluyo archivos necesarios
    
    require ("./controller/contactoController.php");
    require ("./model/contacto.php");
    
    //Instancio el controlador
    
    $controller = new contactoController();
    
    //Ejecuto el método por defecto del controlador
    
    $controller->index();
?>