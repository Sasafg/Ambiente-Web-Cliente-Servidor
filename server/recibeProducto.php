<?php

require_once '../include/obtieneRequets.php';

$nombre = recogePost("nombreProducto");
$precio = recogePost("precioProducto");
$descripcion = recogePost("descProducto");
$ruta = "../subirArchivo/";
$tabla = recogePost("tipoProducto");


    require_once '../conexionDB/insertaArticulo.php';
    
    if(ingresaArticulo($nombre, $ruta, $descripcion, $precio, $tabla)){
        echo "<p>Se ingresó adecuadamente </p>";
    }else{
        echo "<p>No se pudo ingresar</p>";
        echo "\n";
    }


echo "<a href='../subirArchivo/modificarProducto.php'>Volver</a>";

?>