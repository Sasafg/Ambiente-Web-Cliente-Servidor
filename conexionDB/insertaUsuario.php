<?php

require_once "conexion.php";

//Ingresa la informacion de registro del nuevo usuario a base de datos
function ingresaUsuario($pNombre, $pUsername, $pCorreo, $pPassword, $pTipo)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into usuarios (id, nombre, username, correo, contrasena, tipo)
                                        values(?,?,?,?,?,?)");
        $stmt->bind_param("issssi", $iAuto, $iNombre, $iUsername, $iCorreo, $iPassword, $iTipo);

        //set parametros y ejecutar
        $iAuto = '';
        $iNombre = $pNombre;
        $iUsername = $pUsername;
        $iCorreo = $pCorreo;
        $iPassword = $pPassword;
        $iTipo = $pTipo;

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
    $sql = "delete from usuarios where id = ?";

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $elimina = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($elimina, "s", $pID);
        $ok=mysqli_stmt_execute($elimina);
    }

    Desconecta($conexion);
}


//Consulta cierta informacion de registro del usuario a base de datos
function consultaUsuario($pID)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select nombre, username, correo from usuarios where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($resultado, "s", $pID);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $nombre, $username, $correo);
            while(mysqli_stmt_fetch($resultado)){
                echo $nombre . " <br> " . $username . " <br> " . $correo . "<br>";
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}


//Cambio de contrasena por medio de UPDATE (solo para admin)
function actualizaUsuario($idUsuario, $contrasena)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "update usuarios set contrasena = ? where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $actualizacion = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($actualizacion, "si", $contrasena, $idUsuario);
        $ok=mysqli_stmt_execute($actualizacion);
    }

    Desconecta($conexion);

}



?>