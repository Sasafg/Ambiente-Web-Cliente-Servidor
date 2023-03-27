<?php

require_once '../include/obtieneRequets.php';

$nombre = recogePost("nombre");
$correo = recogePost("correo");
$telefono = recogePost("telefono");
$asunto = recogePost("asunto");
$mensaje = recogePost("mensaje");




    require_once '../conexionDB/insertaContacto.php';
    if(nuevoContacto($nombre, $correo, $telefono, $asunto, $mensaje)){
        echo "<p>Se ingresó adecuadamente </p>";
    }else{
        echo "<p>No se pudo ingresar</p>";
        echo "\n";
    }


echo "<a href='../php/contacto.php'>Volver</a>";

?>