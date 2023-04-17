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

    <form action="../server/actualizaInfo.php" method="POST">

    <h2> Consulta </h2>
        <?php
        $varRef = "todos";
        try {
            consultaInformacion($varRef);
        } catch (Exception $e) {
            $e->getMessage();
        }
        ?>

    </div>

    <h2> Actualiza </h2>
        <!-- Acerca -->
        <div class="registro">
            <textarea name="acercaInfo" id="acercaInfo" required 
            placeholder="Acerca"></textarea>
        </div>
        <!-- Mision -->
        <div class="registro">
            <textarea name="visionInfo" id="visionInfo" required 
            placeholder="Vision"></textarea>
        </div>
        <!-- Vision -->
        <div class="registro">
            <textarea name="misionInfo" id="misionInfo" required 
            placeholder="Mision"></textarea>
        </div>
        <button type="submit">Actualiza</button>
    </form>

    <p></p>
    <a href="../index.html">Ir al inicio</a>
    <p></p>
    <a href="../php/admin.php">Administracion</a>
    
    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>