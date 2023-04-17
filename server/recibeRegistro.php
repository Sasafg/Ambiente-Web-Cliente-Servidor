<?php

require_once '../include/obtieneRequets.php';

$nombre = recogePost("nombre");
$username = recogePost("username");
$correo = recogePost("correo");
$contrasena = recogePost("password");
$contrasena2 = recogePost("password2");

if($nombre == "Admin"){
    $tipo = 1;
} else {
    $tipo = 0;
}

$correoOk = false;
$contrasena2OK = false;


if(preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,6}$/", $correo)){
    $correoOk = true;
}

if($contrasena == $contrasena2){
    $contraEncriptada=password_hash($contrasena, PASSWORD_DEFAULT);
    $contrasena2OK = true;
    
}


if($correoOk && $contrasena2OK){

    require_once '../conexionDB/insertaUsuario.php';
$username = recogePost("username");
    if(ingresaUsuario($nombre, $username, $correo, $contraEncriptada, $tipo)){
        echo "<p>Se ingresó adecuadamente </p>";
    }else{
        echo "<p>No se pudo ingresar</p>";
        echo "\n";
    }
}

header('Location: ../php/registro.php?alerta=2');

?>
