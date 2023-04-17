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
    <?php
    require_once '../include/obtieneRequets.php';
    require_once '../conexionDB/insertaResena.php';
    $nombreTabla = "resenas";
    $arr = devArreglo($nombreTabla);
    ?>

    <div class="resenas">

        <form method="POST" action="../server/recibeResena.php">
            <h2> Deja una Reseña </h2>
            <!--  -->
            <span id="puntaje" style="color: black;">
                <label for="lcal1">1</label>
                <input id="puntaje" type="radio" name="puntaje" value="1"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="lcal2">2</label>
                <input id="puntaje" type="radio" name="puntaje" value="2" />&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="lcal3">3</label>
                <input id="puntaje" type="radio" name="puntaje" value="3" />&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="lcal4">4</label>
                <input id="puntaje" type="radio" name="puntaje" value="4" />&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="lcal4">5</label>
                <input id="puntaje" type="radio" name="puntaje" value="5" checked="checked" /></span><br />
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
    <?php
    echo "Puntuacion promedio <br><br>";
    echo promediaResena();
    ?>
    </div>
    <div class="row">
        <?php
        foreach ($arr as $row) {
            $pID = $row["id"];
            ?>
            <div class="column">
                <?php
                ?>
                <div class="card">
                    <h3>
                        <?php
                        $varRef = "puntaje";
                        consultaResena($pID, $varRef, $nombreTabla);
                        ?>
                    </h3>
                    <h4>
                        <?php
                        $varRef = "comentario";
                        consultaResena($pID, $varRef, $nombreTabla);
                        ?>
                    </h4>
                </div>
            </div>
            <?php
        }
        ?>

</body>

</html>