<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/administracion.php';

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

    <form action="../server/cambiaContrasena.php" method="POST">

    
    

    <h2> Cambio contraseña </h2>
        <!-- anterior -->
        <div class="registro">
            <input type="password" name="oldPass" id="oldPass" required 
            placeholder="Contrasena actual"></textarea>
        </div>
        <!-- nueva -->
        <div class="registro">
            <input type="password" name="newPass" id="newPass" required 
            placeholder="Contrasena nueva"></textarea>
        </div>

        <button type="submit">Cambiar</button>
    </form>

    <p></p>
    <a href="../index.html">Ir al inicio</a>
    <p></p>
    <a href="../php/admin.php">Administracion</a>
    
    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>

