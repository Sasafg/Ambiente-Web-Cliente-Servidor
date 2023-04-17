<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/administracion.php';
$nombreTabla = recogePost("selecProd");

?>

<head>
    <title>Solicitudes Administrador</title>
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

        <form action="../server/eliminaSolicitud.php" method="POST">

            <h2> Eliminar </h2>
            <!-- ID -->
            <input type="text" name="idSolicitud" id="idSolicitud" required placeholder="ID">
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