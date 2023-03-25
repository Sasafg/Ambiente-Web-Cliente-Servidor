<?php

require_once "conexion.php";

//Ingresa la informacion de registro del nuevo usuario a base de datos
function ingresaUsuario($pNombre, $pUsername, $pCorreo, $pPassword)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into usuarios (id, nombre, username, correo, contrasena)
                                        values(?,?,?,?,?)");
        $stmt->bind_param("issss", $iAuto, $iNombre, $iUsername, $iCorreo, $iPassword);

        //set parametros y ejecutar
        $iAuto = '';
        $iNombre = $pNombre;
        $iUsername = $pUsername;
        $iCorreo = $pCorreo;
        $iPassword = $pPassword;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}


//Elimina la informacion de registro del usuario en base de datos
function eliminaUsuario($pID)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("delete from usuarios
                                    where username = {$_POST['username']}");
        

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}


//Consulta cierta informacion de registro del usuario a base de datos
function consultaUsuario()
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("select id, nombre, username, correo from usuarios");
        
        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}


?>