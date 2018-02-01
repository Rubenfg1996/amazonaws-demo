<?php
    namespace App;
    
    use App\Controller\UsuarioController;
    
    //Ruta de la carpeta public
    $public = "/cms/public/";
    
    //llamo a la cabecera
    require ("../view/partials/header.php");

    //Ruta de la home
    $home = "/cms/public/index.php/";
        
    //Defino la función que autocargará las clases cuando se instancien
    spl_autoload_register('App\autoload');
    
    function autoload($clase, $dir=null){
        //Directorio raiz de mi proyecto
        if(is_null($dir)){
            $dirname = str_replace("/public","",dirname(__FILE__));
            $dir = realpath($dirname);
        }
        
        //Escaneo en busca de la clase de forma recursiva
        foreach (scandir($dir) as $file) {
            //Si es un directorio (y no es de sistema), busco la clase dentro de él
            if (is_dir($dir."/".$file) AND substr($file, 0, 1 ) !== '.'){
                autoload($clase, $dir."/".$file);
            }
            //Si es archivo y el nombre coincide con la clase
            else if (is_file($dir."/".$file) AND $file == substr(strrchr($clase, "\\"), 1).".php"){
                require($dir."/".$file);
            }
        }
    }

    //Compruebo que ruta me estan pidiendo
    
    $ruta = str_replace($home,'',$_SERVER['REQUEST_URI']);

    if($ruta=="panel"){
        //Instancio el controlador
        $controller = new UsuarioController();

        //Le mando al panel de acceso
        $controller->acceso(); 
    }
    
    
    //llamo al footer
    require ("../view/partials/footer.php");
?>