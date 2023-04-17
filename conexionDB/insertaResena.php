<?php

require_once "conexion.php";

function ingresaResena($pPuntaje, $pComentario)
{
    $retorno = false;
    $conexion = Conecta();

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")) {
        $stmt = $conexion->prepare("Insert into resenas (id, puntaje, comentario)
                                        values(?,?,?)");
        $stmt->bind_param("iss", $iAuto, $iPuntaje, $iComentario);

        //set parametros y ejecutar
        $iAuto = '';
        $iPuntaje = $pPuntaje;
        $iComentario = $pComentario;


        if ($stmt->execute()) {
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}

function devArreglo($nombreTabla)
{

    $conexion = Conecta();
    $sql = "select id from " . $nombreTabla;

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")) {
        $arr = mysqli_query($conexion, $sql);
        //$ok=mysqli_stmt_bind_param($arr, "s", $nombreColumna);
        //$ok=mysqli_stmt_execute();
        //$arregloAssoc = $ok->fetch_assoc();
        return $arr;
    } else {
        return null;
    }

    Desconecta($conexion);


}

function consultaResena($pID, $varRef, $nombreTabla)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select puntaje, comentario from " . $nombreTabla . " where id = ?";

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")) {
        $resultado = mysqli_prepare($conexion, $sql);
        $ok = mysqli_stmt_bind_param($resultado, "s", $pID);
        $ok = mysqli_stmt_execute($resultado);

        if ($ok) {
            $ok = mysqli_stmt_bind_result($resultado, $puntaje, $comentario);
            while (mysqli_stmt_fetch($resultado)) {
                if ($varRef == "puntaje") {
                    echo $puntaje . " <br> ";
                } else if ($varRef == "comentario") {
                    echo $comentario;
                } else {
                    echo $puntaje . " <br> " . $comentario . " <br> ";
                }
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}


function promediaResena()
{
    $retorno = "";
    $conexion = Conecta();
    $sql = "select AVG(puntaje) as puntajepromedio from resenas";

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")) {
        $resultado = mysqli_prepare($conexion, $sql);
        //$ok = mysqli_stmt_bind_param($resultado, "s", $pID);
        $ok = mysqli_stmt_execute($resultado);

        if ($ok) {
            $ok = mysqli_stmt_bind_result($resultado, $puntajepromedio);
            while (mysqli_stmt_fetch($resultado)) {
                $retorno = $puntajepromedio;
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

    return $retorno;

}