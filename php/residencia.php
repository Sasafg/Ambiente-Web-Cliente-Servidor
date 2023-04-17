
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
                        <button class="button button2">COTIZAR AHORA</button>
                    <style>
                        .button {
                            border: none;
                            color: white;
                            padding: 16px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 13px;
                            margin: 4px 2px;
                            transition-duration: 0.4s;
                            cursor: pointer;
                            height: 15px;
                            align-items: center;


                        }


                        .button2 {
                            background-color: white;
                            color: black;
                            border: 2px solid #666e9e;
                            ;
                        }

                        .button2:hover {
                            background-color: #666e9e;
                            color: white;
                        }
                    </style>

                    
                </div>
                

            </div>
            <?php
            }
            ?>



        
    </div>
    </div>
    <h6>TODOS LOS DERECHOS RESERVADOS DECOSHOP LIBERA Ⓡ </h6>
    
</body>




</html>