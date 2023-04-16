<?php

require_once '../include/obtieneRequets.php';

$idAdmin = recogePost("idAdmin");

    require_once '../conexionDB/ingresaAdmin.php';
    if(eliminaAdmin($idAdmin)){
        echo "<p>Se eliminó adecuadamente </p>";
    }else{
        echo "<p>No se pudo eliminar</p>";
        echo "\n";
    }


echo "<a href='../phpAdmin/administradores.php'>Volver</a>";

?>
