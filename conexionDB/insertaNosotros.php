<?php

require_once "conexion.php";

//Ingresa la informacion a base de datos
function ingresaInfo($pAcerca, $pVision, $pMision)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into infogeneral (id, acerca, vision, mision)
                                        values(?,?,?,?)");
        $stmt->bind_param("isss", $iAuto, $iAcerca, $iVision, $iMision);

        //set parametros y ejecutar
        $iAuto = '';
        $iAcerca = $pAcerca;
        $iVision = $pVision;
        $iMision = $pMision;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}


//Elimina la informacion de registro del usuario en base de datos
function eliminaInfo($pID)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "delete from infogeneral where id = ?";

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $elimina = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($elimina, "s", $pID);
        $ok=mysqli_stmt_execute($elimina);
    }

    Desconecta($conexion);
}


//Consulta cierta informacion de registro del usuario a base de datos
function consultaInfo($pID, $varRef)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select acerca, vision, mision from infogeneral where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($resultado, "s", $pID);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $acerca, $vision, $mision);
            while(mysqli_stmt_fetch($resultado)){
                if($varRef == "acerca"){
                    echo $acerca . " <br> ";
                } else if ($varRef == "vision"){
                    echo $vision . " <br> ";
                } else if($varRef == "mision"){
                    echo $mision . " <br> ";
                } else {
                    echo $acerca . " <br> " . $vision . " <br> " . $mision . "<br>";
                }
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}


//Cambio de contrasena por medio de UPDATE (solo para admin)
function actualizaInfo($pID)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "update infogeneral set acerca = ?, vision = ?, mision = ? where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $actualizacion = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($actualizacion, "ssfi", $acerca, $vision, $mision);
        $ok=mysqli_stmt_execute($actualizacion);
    }

    Desconecta($conexion);

}


?>