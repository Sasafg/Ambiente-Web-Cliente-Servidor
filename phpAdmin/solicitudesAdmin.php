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

    <form action="../server/eliminaSolicitud.php" method="POST">

    <h2> Eliminar </h2>
        <!-- ID -->
        <div class="registro">
            <input type="text" name="idSolicitud" id="idSolicitud" required 
            placeholder="ID">
        </div>
        <button type="submit">Eliminar</button>
    </form>

    <h2> Consulta </h2>
        <?php
        $varRef = "todos";
        try {
            consultaTodasSolicitudes();
        } catch (Exception $e) {
            $e->getMessage();
        }
        ?>

    </div>

    <p></p>
    <a href="../index.html">Ir al inicio</a>

    <p></p>
    <a href="../php/admin.php">Administracion</a>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>