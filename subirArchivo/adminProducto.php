<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/insertaArticulo.php';
$nombreTabla = recogePost("selecProd");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Eliminar producto</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Contacto.css" />
    <link rel="preload" href="../css/contacto.css" as="style">
    <link rel="stylesheet" href="../css/style.css">

</head>

<?php
include_once '../include/navbar.php';
?>

<body>
    <div class="container1">
        <div class="vacio1"></div>

        <form action="./eliminaProducto.php" method="POST">

            <h2> Eliminar </h2>
            <!-- ID -->
            <span id="selecProd">
                <input id="selecProd2" type="radio" name="selecProd2" value="articulos" checked="checked"
                    onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
                <label for="lcal1">Articulos</label>
                <input id="selecProd2" type="radio" name="selecProd2" value="vehiculos"
                    onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
                <label for="lcal2">Vehiculos</label>
                <input id="selecProd2" type="radio" name="selecProd2" value="residencias"
                    onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
                <label for="lcal3">Residencias</label>
            </span><br />
            <input type="text" name="idProducto" id="idProducto" required placeholder="ID">
            <button type="submit">Eliminar</button>
        </form>

        <p></p>
        <a href="../index.html">Ir al inicio</a>
        <p></p>
        <a href="../php/admin.php">Administracion</a>
        <div class="vacio2"></div>
    </div>
    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>

</html>