<?php

require_once "conexion.php";

//Ingresa la informacion de registro del nuevo usuario a base de datos
function nuevoContacto($new_nombre, $new_correo, $new_telefono, $new_asunto, $new_mensaje)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into contacto (id, nombre, correo, telefono, asunto, mensaje)
                                        values(?,?,?,?,?,?)");
        $stmt->bind_param("isssss", $Auto, $nombre, $correo, $telefono, $asunto, $mensaje);

        //set parametros y ejecutar
        $Auto = '';
        $nombre = $new_nombre;
        $correo = $new_correo;
        $telefono = $new_telefono;
        $asunto = $new_asunto;
        $mensaje = $new_mensaje;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}

    ?>