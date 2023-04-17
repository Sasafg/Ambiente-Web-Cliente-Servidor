<?php

require_once '../include/obtieneRequets.php';

$pID = 1;
$acerca = recogePost("acercaInfo");
$vision = recogePost("visionInfo"); 
$mision = recogePost("misionInfo");

    require_once '../conexionDB/administracion.php';
    try {
        actualizaInformacion($pID, $acerca, $vision, $mision);
        echo "<p>Se actualizó adecuadamente </p>";
    } catch (Exception $e) {
        echo "No se pudo actualizar, error ".$e.getMessage();
    }


echo "<a href='../phpAdmin/infoAdmin.php'>Volver</a>";

?>