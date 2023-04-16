<?php

require_once '../include/obtieneRequets.php';

$usuario = recogePost("usernameIng");
$contrasena = recogePost("passIng");


    require_once '../conexionDB/validaLogin.php';
    if(validaUsuario($usuario, $contrasena)){
        echo "<p>Se ingresó correctamente </p>";
        echo "\n";
        echo "<a href='../php/index.php'>Volver</a>";
    }else{
        echo "<p>No se pudo ingresar</p>";
        echo "\n";
        echo "<a href='../php/login.php'>Volver</a>";
    }

?>