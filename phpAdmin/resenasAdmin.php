<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/administracion.php';
require_once '../conexionDB/insertaResena.php';


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

    <h2> Consulta </h2>
        <?php
        echo "<br> ___________________________ <br>";
        echo "<br> Puntuacion promedio <br>";
        echo promediaResena();
        echo "<br> ___________________________ <br><br>";
        $varRef = "todos";
        try {
            echo "<br> Todas las reseñas: <br><br>";
            consultaResenas($varRef);
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