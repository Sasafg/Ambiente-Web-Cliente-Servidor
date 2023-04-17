<?php

require_once '../include/obtieneRequets.php';
require_once '../conexionDB/insertaArticulo.php';
$nombreTabla = recogePost("selecProd");

?>

<head>
    <title>Cambio contraseña</title>
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
    <div class="vacio1">

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

    <p></p>
    <a href="../index.html">Ir al inicio</a>
    <p></p>
    <a href="../php/admin.php">Administracion</a>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>