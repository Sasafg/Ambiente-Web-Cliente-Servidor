<?php

require_once "conexion.php";

//Ingresa la informacion de registro del nuevo usuario a base de datos
function validaUsuario($ing_usuario, $ing_contrasena)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("select id from usuarios where username = ? and contrasena = ?");
        $stmt->bind_param("ss", $usuario, $contrasena);

        //set parametros y ejecutar
        $usuario = $ing_usuario;
        $contrasena = $ing_contrasena;

        if($stmt->execute()){
            $stmt->store_result();
            if ($stmt->num_rows == 1) {
                $retorno = true;
            }
        }
    }

    Desconecta($conexion);

    return $retorno;
}

    ?>