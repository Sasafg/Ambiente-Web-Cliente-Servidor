<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Modificar</title>
</head>
<body>
    <?php
    require_once '../conexionDB/insertaArticulo.php';
    ?>

    <div class="vacio1">

    <form action="./productoNuevo.php" method="POST">
    <h2> Agregar producto </h2>
        <button type="submit">Agregar</button>
    </form>

    <form action="./adminProducto.php" method="POST">
        <h2> Consultar o eliminar </h2>
        <span id="selecProd">
            <label for="lcal1">Articulos</label>
            <input id="selecProd" type="radio" name="selecProd" value="articulos" checked="checked" onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
            <label for="lcal2">Vehiculos</label>
            <input id="selecProd" type="radio" name="selecProd" value="vehiculos" onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
            <label for="lcal3">Residencias</label>
            <input id="selecProd" type="radio" name="selecProd" value="residencias" onclick="setCookie('selecProd',getElementById('selecProd').value,1)" />
        </span><br />

        <button type="submit" onclick="setCookie('prueba',getElementById('prueba').value,1)">Consultar o eliminar</button>
        </form>
    </div>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>