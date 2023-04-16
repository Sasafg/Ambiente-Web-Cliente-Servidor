<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/administracion.php';
$nombreTabla = recogePost("selecProd");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Modificar</title>
</head>
<body>
    <div class="vacio1">

    <form action="./eliminaProducto.php" method="POST">

    <h2> Eliminar </h2>
        <!-- ID -->
        <span id="selecProd">
            <label for="lcal1">Articulos</label>
            <input id="selecProd2" type="radio" name="selecProd2" value="articulos" checked="checked" onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
            <label for="lcal2">Vehiculos</label>
            <input id="selecProd2" type="radio" name="selecProd2" value="vehiculos" onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
            <label for="lcal3">Residencias</label>
            <input id="selecProd2" type="radio" name="selecProd2" value="residencias" onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
        </span><br />

        <div class="registro">
            <input type="text" name="idProducto" id="idProducto" required 
            placeholder="ID">
        </div>
        <button type="submit">Eliminar</button>
    </form>

    <h2> Consulta </h2>
        <?php
        $varRef = "todos";
        try {
            consultaTodosArticulo($varRef, $nombreTabla);
        } catch (Exception $e) {
            $e->getMessage();
        }
        ?>

    </div>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>