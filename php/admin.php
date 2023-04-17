<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../css/style.css" as="style">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Contacto.css" />

    <title>Admin</title>
</head>

<body>

    <!-- Incluye el navbar ubicado en la carpeta Include -->
    <?php
    include_once '../include/navbar.php';
    ?>

    <div class="resenas">

        <form>
            <h2> Administrar </h2>
            <div>
                <a href="../subirArchivo/modificarProducto.php" style="margin-left:17%; color: black">Productos
                </a> 
            </div>

            <div>
            <a href="../phpAdmin/solicitudesAdmin.php" style="margin-left:17%; color: black">Solicitudes
                </a> 
            </div>

            <a href="../phpAdmin/infoAdmin.php" style="margin-left:17%; color: black">Informacion
                </a> 
            <div>
                
            <a href="../phpAdmin/resenasAdmin.php" style="margin-left:17%; color: black">Reseñas
                </a> 
            </div>
            </div>

            <script src="../cookie/Cookie.js"></script>
            <script src="../js/scriptRegistro.js"></script>
        </form>
    </div>



</body>

</html>