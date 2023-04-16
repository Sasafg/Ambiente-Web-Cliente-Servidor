<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../css/style.css" as="style">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Contacto.css" />

    <title>Reseñas</title>
</head>

<body>

    <!-- Incluye el navbar ubicado en la carpeta Include -->
    <?php
    include_once '../include/navbar.php';
    ?>

    <div class="resenas">

        <form method="POST" action="../server/recibeResena.php">
            <h2> Deja una Reseña </h2>
            <!-- Comentario -->
            <div class="caja">
                <input type="number" name="                             calificacion" id="calificacion" required placeholder="Calificacion">
            </div>
            <div class="caja">
                <input type="text" name="comentario" id="comentario" required placeholder="Comentario">
            </div>

            <button type="submit" href="./php/resenas.php" onclick="procesaResena()">Enviar Reseña</button>
            <script src="../cookie/Cookie.js"></script>
            <script src="../js/scriptRegistro.js"></script>
        </form>
    </div>



</body>

</html>