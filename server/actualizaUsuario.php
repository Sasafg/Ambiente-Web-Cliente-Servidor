<?php

require_once '../include/obtieneRequets.php';

$id = recogePost("id");
$nombre = recogePost("nombre");
$username = recogePost("username");
$correo = recogePost("correo");
$contrasena = recogePost("contrasena");
$tipo = recogePost("tipo");

    require_once '../conexionDB/insertaUsuario.php';
    if(editaUsuario($id, $nombre, $username, $correo, $contrasena, $tipo)){
        echo "<p>Se edito la información correctamente </p>";
    }else{
        echo "<p>No se pudo editar</p>";
        echo "\n";
    }


echo "<a href='../phpAdmin/adminUsuarios.php'>Volver</a>";

?>