<?php

require_once '../include/obtieneRequets.php';

$tipo = 1;
$oldPass = recogePost("oldPass");
$newPass = recogePost("newPass"); 
$contrasenaActual = "PENDIENTE";

    require_once '../conexionDB/administracion.php';

    if($oldPass == $contrasenaActual){
        /*
        try {
            actualizaContrasenaAdmin($tipo, $newPass);
            echo "<p>Se actualizó adecuadamente </p>";
        } catch (Exception $e) {
            echo "No se pudo actualizar, error ".$e.getMessage();
        }
        */
    } else {
        //echo "No se pudo actualizar";
    }

    try {
        actualizaContrasenaAdmin($tipo, $newPass);
        echo "<p>Se actualizó adecuadamente </p>";
    } catch (Exception $e) {
        echo "No se pudo actualizar, error ".$e.getMessage();
    }


echo "<a href='../phpAdmin/passAdmin.php'>Volver</a>";

?>
