<?php

require_once '../include/obtieneRequets.php';

$idAdmin = recogePost("idAdmin");

    require_once '../conexionDB/ingresaAdmin.php';
    if(consultaAdmin($idAdmin)){
    }else{
        echo "<p>No se pudo consultar</p>";
        echo "\n";
    }


echo "<a href='../phpAdmin/administradores.php'>Volver</a>";

?>
