<?php

function Conecta()
{
    // 1. Establecer la conexión con el servidor de base de datos y seleccionar catalogo o base datos que vamos a utilizar
    $server = "localhost";
    $user = "root";
    $password = "";
    $dataBase = "universidad";

    $conexion = mysqli_connect($server, $user, $password, $dataBase);

    if(!$conexion){
        echo "Ocurrió un error al establecer la conexión con la base de datos: " . mysqli_connect_error();
    }

    return $conexion;
}

function Desconecta($conexion)
{
    //3. Cerrar la conexión
    mysqli_close($conexion);
}

?>