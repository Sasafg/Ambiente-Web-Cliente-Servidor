<?php

require_once '../include/obtieneRequets.php';

$idSolicitud = recogePost("idSolicitud");

    require_once '../conexionDB/administracion.php';
    try {
        eliminaSolicitud($idSolicitud);
        echo "<p>Se eliminó adecuadamente </p>";
    } catch (Exception $e) {
        echo "No se pudo eliminar, error ".$e.getMessage();
    }


echo "<a href='../phpAdmin/solicitudesAdmin.php'>Volver</a>";

?>