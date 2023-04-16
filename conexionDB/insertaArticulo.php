<?php

require_once "conexion.php";

//Ingresa la informacion a base de datos
function ingresaArticulo($pNombre, $pImagePath, $pDescripcion, $pPrecio)
{
    $retorno = false;
    $conexion = Conecta();
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("Insert into articulos (id, nombre, imagePath, descripcion, precio)
                                        values(?,?,?,?,?)");
        $stmt->bind_param("isssf", $iAuto, $iNombre, $iImagePath, $iDescripcion, $iPrecio);

        //set parametros y ejecutar
        $iAuto = '';
        $iNombre = $pNombre;
        $iImagePath = $pImagePath;
        $iDescripcion = $pDescripcion;
        $iPrecio = $pPrecio;

        if($stmt->execute()){
            $retorno = true;
        }
    }

    Desconecta($conexion);

    return $retorno;
}


//Elimina la informacion de registro del usuario en base de datos
function eliminaArticulo($pID)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "delete from articulos where id = ?";

    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $elimina = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($elimina, "s", $pID);
        $ok=mysqli_stmt_execute($elimina);
    }

    Desconecta($conexion);
}


//Consulta cierta informacion de registro del usuario a base de datos
function consultaArticulo($pID, $varRef)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "select nombre, imagePath, descripcion, precio from articulos where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $resultado = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($resultado, "s", $pID);
        $ok=mysqli_stmt_execute($resultado);
        
        if($ok){
            $ok=mysqli_stmt_bind_result($resultado, $nombre, $imagePath, $descripcion, $precio);
            while(mysqli_stmt_fetch($resultado)){
                if($varRef == "nombre"){
                    echo $nombre . " <br> ";
                } else if ($varRef == "descripcion"){
                    echo $descripcion . " <br> ";
                } else if($varRef == "precio"){
                    echo $precio . " <br> ";
                } else if ($varRef == "imagePath"){
                    echo $imagePath;
                } else {
                    echo $nombre . " <br> " . $descripcion . " <br> " . $precio . "<br>";
                }
            }
        } else {
            echo "Error consulta";
        }
    }

    Desconecta($conexion);

}


//Cambio de contrasena por medio de UPDATE (solo para admin)
function actualizaArticulo($pID)
{
    $retorno = false;
    $conexion = Conecta();
    $sql = "update articulos set nombre = ?, descripcion = ?, precio = ? where id = ?";
    
    // formato de datos utf8
    if (mysqli_set_charset($conexion, "utf8")){
        $actualizacion = mysqli_prepare($conexion, $sql);
        $ok=mysqli_stmt_bind_param($actualizacion, "ssfi", $nombre, $descripcion, $precio);
        $ok=mysqli_stmt_execute($actualizacion);
    }

    Desconecta($conexion);

}



?>