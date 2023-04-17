<?php

require_once "conexion.php";

/**ELIMINACIONES */

//Elimina la informacion de registro del usuario en base de datos
function eliminaSolicitud($pID)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "delete from contacto where id = ?";

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $elimina = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($elimina, "s", $pID);
        $ok=mysqli_stmt_execute($elimina);
    }

    Desconecta($conexion);
}


/*CONSULTAS*/

//Consulta cierta informacion de registro del usuario a base de datos
function consultaTodasSolicitudes()
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select id, nombre, correo, telefono, asunto, mensaje from contacto";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        //$ok=mysqli_stmt_bind_param($resultado);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $id, $nombre, $correo, $telefono, $asunto, $mensaje);
            while(mysqli_stmt_fetch($resultado)){
                echo "ID: " .$id . " <br> nombre: " . $nombre . " <br> correo: " . $correo . " <br> telefono: " . $telefono . " <br> asunto: " . $asunto ." <br> mensaje: " . $mensaje ."<br><br>";
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}

//Consulta cierta informacion de registro del usuario a base de datos
function consultaUnaSolicitud($varRef)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select id, nombre, correo, telefono, asunto, mensaje from contacto";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        //$ok=mysqli_stmt_bind_param($resultado);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $id, $nombre, $correo, $telefono, $asunto, $mensaje);
            while(mysqli_stmt_fetch($resultado)){
                if($varRef == "nombre"){
                    echo $nombre . " <br> ";
                } else if ($varRef == "correo"){
                    echo $correo . " <br> ";
                } else if($varRef == "telefono"){
                    echo $telefono . " <br> ";
                } else if($varRef == "asunto"){
                    echo $asunto . " <br> ";
                } else if($varRef == "mensaje"){
                    echo $mensaje . " <br> ";
                } else {
                    echo "ID: " .$id . " <br> nombre: " . $nombre . " <br> correo: " . $correo . " <br> telefono: " . $telefono . " <br> asunto: " . $asunto ." <br> mensaje: " . $mensaje ."<br><br>";
                }
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}

//Consulta cierta informacion de registro del usuario a base de datos
function consultaResenas($varRef)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select id, puntaje, username_id, comentario from resenas";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        //$ok=mysqli_stmt_bind_param($resultado);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $id, $puntaje, $username_id, $comentario);
            while(mysqli_stmt_fetch($resultado)){
                if($varRef == "puntaje"){
                    echo $puntaje . " <br> ";
                } else if ($varRef == "username_id"){
                    echo $username_id . " <br> ";
                } else if($varRef == "comentario"){
                    echo $comentario . " <br> ";
                } else {
                    echo "ID: " .$id . " <br> puntaje: " . $puntaje . " <br> username_id: " . $username_id . " <br> comentario: " . $comentario . "<br><br>";
                }
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}
//Consulta cierta informacion de registro del usuario a base de datos
function consultaInformacion($varRef)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select id, acerca, vision, mision from infogeneral";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        //$ok=mysqli_stmt_bind_param($resultado);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $id, $acerca, $vision, $mision);
            while(mysqli_stmt_fetch($resultado)){
                if($varRef == "acerca"){
                    echo $acerca . " <br> ";
                } else if ($varRef == "vision"){
                    echo $vision . " <br> ";
                } else if($varRef == "mision"){
                    echo $mision . " <br> ";
                } else {
                    echo " <br> ACERCA:<br><br> " . $acerca . " <br><br> VISION:<br><br> " . $vision . " <br><br> MISION:<br><br> " . $mision . "<br><br>";
                }
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}


/**ACTUALIZACIONES */

//Cambio por medio de UPDATE (solo para admin)
function actualizaInformacion($pID, $acerca, $vision, $mision)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "update infogeneral set acerca = ?, vision = ?, mision = ? where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $actualizacion = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($actualizacion, "sssi", $acerca, $vision, $mision, $pID);
        $ok=mysqli_stmt_execute($actualizacion);
    }

    Desconecta($conexion);

}

function actualizaContrasenaAdmin($tipo, $password)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "update usuarios set contrasena = ? where tipo = 1";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $actualizacion = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($actualizacion, "s", $password);
        $ok=mysqli_stmt_execute($actualizacion);
    }

    Desconecta($conexion);

}



?>