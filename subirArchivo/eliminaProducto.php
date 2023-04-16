<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/insertaArticulo.php';
require_once './adminProducto.php';

$idProd = recogePost("idProducto");
$nombreTabla = recogePost("selecProd2");

try {
    eliminaArticulo($idProd, $nombreTabla);
    echo "Eliminado con exito";
} catch (Exception $e) {
    echo "No se pudo eliminar, error ".$e.getMessage();
}
    

echo "<br><a href='./modificarProducto.php'>Volver</a>";

?>
