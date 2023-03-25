<?php

require_once '../include/obtieneRequets.php';

$nombre = recogePost("nombre");
$username = recogePost("username");
$correo = recogePost("correo");
$contrasena = recogePost("password");
$contrasena2 = recogePost("password2");

$correoOk = false;
$contrasena2OK = false;

$errorCorreo = "";
$errorContrasena = "";


if(preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,6}$/", $correo)){
    $correoOk = true;
} else {
    $errorCorreo = "Correo";
}

if($contrasena == $contrasena2){
    $contrasena2OK = true;
} else {
    $errorContrasena = "contrasena";
}


if($correoOk && $contrasena2OK){

    require_once '../conexionDB/insertaUsuario.php';
$username = recogePost("username");
    if(ingresaUsuario($nombre, $username, $correo, $contrasena)){
        echo "<p>Se ingresó adecuadamente </p>";
    }else{
        echo "<p>No se pudo ingresar</p>";
        echo "\n";
    }
} else {
    echo $errorCorreo;
    echo "";
    echo $errorContrasena;
}

?>
