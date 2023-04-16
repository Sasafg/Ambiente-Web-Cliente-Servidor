<?php

require_once "conexion.php";

function ingresaResena($pPuntaje, $pComentario)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into resenas (id, puntaje, comentario)
                                        values(?,?,?)");
        $stmt->bind_param("iss", $iAuto, $iPuntaje, $iComentario);

        //set parametros y ejecutar
        $iAuto = '';
        $iPuntaje = $pPuntaje;
        $iComentario = $pComentario;


        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}

?>