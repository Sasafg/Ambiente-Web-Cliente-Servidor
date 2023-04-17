<?php

require_once '../include/obtieneRequets.php';

$puntaje = recogePost("puntaje");
$comentario = recogePost("comentario");


    require_once '../conexionDB/insertaResena.php';
    if(ingresaResena($puntaje, $comentario)){
        echo "<p>Se ingresó adecuadamente </p>";
    }else{
        echo "<p>No se pudo ingresar</p>";
        echo "\n";
    }


echo "<a href='../php/resenas.php'>Volver</a>";

?>