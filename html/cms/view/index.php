
        <h3><?php echo "$datos->id";?></h3>
        <h3><?php echo "$datos->usuario";?></h3>
        <h3><?php echo "$datos->clave";?></h3>
        <h3><?php echo "$datos->fechaAcceso";?></h3>
        <h3><?php echo "$datos->activo";?></h3>
        <h3><?php echo "$datos->permisosUsuarios";?></h3>


<?php
    /*if (hash_equals($datos->clave, crypt(1, $datos->clave))) {
        echo "¡Contraseña verificada!";
    }*/
?>