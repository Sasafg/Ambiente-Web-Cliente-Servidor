
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@100;500&family=Open+Sans&display=swap" rel="stylesheet">

</head>

<?php
    include_once '../include/navbar.php';
    ?>

<body>
    <h1>Polarizado Residencial</h1>
    <?php
        require_once '../include/obtieneRequets.php';
        require_once '../conexionDB/insertaArticulo.php';
        $nombreTabla = "residencias";
        $arr = devArreglo($nombreTabla);
        ?>
        <div class="row">
            <?php
            foreach($arr as $row){ 
                $pID = $row["id"];
                ?>
                <div class="column">
                <?php
                ?>
                <div class="card">
                    <h3>
                        <?php
                        $varRef = "nombre";
                        consultaArticulo($pID, $varRef, $nombreTabla);
                        ?>
                    </h3>
                    <?php $varRef = "imagePath"?>
                    <img src="<?php consultaArticulo($pID, $varRef, $nombreTabla);?>"
                        alt="deco" width="220" height="220">
                        <h4>
                        <?php
                        $varRef = "descripcion";
                        consultaArticulo($pID, $varRef, $nombreTabla);
                        ?>
                        </h4>
                    <div class="container">
                        <h4>Precio:₡ 
                        <?php
                        $varRef = "precio";
                        consultaArticulo($pID, $varRef, $nombreTabla);
                        ?>
                        </h4>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


<!-- SECCION A REMOVER UNA VEZ SE INGRESE LA INFO A LA BASE DE DATOS
    <div class="row">
        <div class="column">
            <div class="card">
                <h3>Polarizado Industrial</h3>
                <img src="../imagenes/el-coco.jpg"
                    alt="deco" width="220" height="220">
                <div class="container">
                    <h4>Precio:₡88.000 </h4>
                    <input type="number" class="input-number" placeholder="Digite la cantidad">
                    <button type="submit" class="boton">Agregar</button>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h3>Ventanas Pequeñas</h3>
                <img src="../imagenes/elcoco.jpg"
                    alt="deco" width="220" height="220">
                <h4>Precio:₡19.000 </h4>

                <input type="number" class="input-number" placeholder="Digite la cantidad">
                <button type="submit" class="boton">Agregar</button>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h3>Puertas de Vidrio</h3>
                <img src="../imagenes/nicoya.jpg"
                    alt="deco" width="220" height="220">
                <h4>Precio:₡49.000 </h4>

                <input type="number" class="input-number" placeholder="Digite la cantidad">
                <button type="submit" class="boton">Agregar</button>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h3>Ventanas 2 x 1.5</h3>
                <img src="../imagenes/nicoya2.jpg"
                    alt="deco" width="220" height="220">
                <h4>Precio:₡28.000 </h4>

                <input type="number" class="input-number" placeholder="Digite la cantidad">
                <button type="submit" class="boton">Agregar</button>
            </div>
        </div>
-->

        
    </div>
    </div>

    
</body>

</html>