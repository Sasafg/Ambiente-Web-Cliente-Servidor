<?php

require_once '../include/obtieneRequets.php';

$nombre = recogePost("nombreAdmin");
$username = recogePost("usernameAdmin");
$contrasena = recogePost("passAdmin");

require_once '../conexionDB/ingresaAdmin.php';
if(ingresaAdmin($nombre, $username, $contrasena)){
    echo "Se ingresó adecuadamente ";
    echo "\n";
}else{
    echo "No se pudo ingresar ";
    echo "\n";
}

echo "<a href='../php/contacto.php'>Volver</a>";

?>
