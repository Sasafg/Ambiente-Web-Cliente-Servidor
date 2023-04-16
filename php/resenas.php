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
            <!--  -->
            <span id="calificacion">
                <label for="lcal1">1</label>
                <input id="calificacion" type="radio" name="calificacion" value="1" />
                <label for="lcal2">2</label>
                <input id="calificacion" type="radio" name="calificacion" value="2" />
                <label for="lcal3">3</label>
                <input id="calificacion" type="radio" name="calificacion" value="3" />
                <label for="lcal4">4</label>
                <input id="calificacion" type="radio" name="calificacion" value="4" />
                <label for="lcal4">5</label>
                <input id="calificacion" type="radio" name="calificacion" value="5" checked="checked" /></span><br />
            <!--  
            <div class="caja">
                <input type="number" name="calificacion" id="calificacion" pattern="[0-5]" required placeholder="Calificacion">
            </div>-->
            <div class="caja">
                <input type="text" name="comentario" id="comentario" required placeholder="Comentario">
            </div>

            <button type="submit" href="./php/resenas.php" onclick="procesaResena()">Enviar Reseña</button>
            <script src="../cookie/Cookie.js"></script>
            <script src="../js/scriptRegistro.js"></script>
        </form>
    </div>

    <div class="resenas">

    </div>
</body>

</html>