
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@100;500&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preload" href="./css/style.css" as="style">
    <link rel="stylesheet" href="./css/style.css">


</head>

<?php
    include_once './include/navbar.php';
    ?>
<body>


        <h1>Polarizado en Vehículos</h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <h3>Parabrisas Trasero</h3>
                    <img src="./imagenes/polarizados.jpg"
                        alt="deco" width="220" height="220">
                    <div class="container">
                        <h4>Precio:₡18.000 </h4>
                        <input type="number" class="input-number" placeholder="Digite la cantidad">
                        <button type="submit" class="boton">Agregar</button>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                        <h3>Polarizado en Ventanas</h3>
                        <img src="https://papelesadhesivos.com/wp-content/uploads/2021/10/polarizados-768x606.jpg"
                            alt="deco" width="220" height="220">
                        <h4>Precio:₡28.000 </h4>

                        <input type="number" class="input-number" placeholder="Digite la cantidad">
                        <button type="submit" class="boton">Agregar</button>
                        <h6>Se aplica a vehículos sin polarizado*</h6>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                            <h3>Remplazo de Polarizado</h3>
                            <img src="https://www.guillermomorales.cl/wp-content/uploads/2019/08/3-1.jpg"
                                alt="deco" width="220" height="220">
                            <h4>Precio:₡38.000 </h4>
    
                            <input type="number" class="input-number" placeholder="Digite la cantidad">
                            <button type="submit" class="boton">Agregar</button>
                            <h6>Se remplaza por completo el polarizado anterior*</h6>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                                <h3>Parabrisas Delantero</h3>
                                <img src="https://www.revistaturbo.com/wp-content/uploads/2018/07/vidriospolarizados.jpg"
                                    alt="deco" width="220" height="220">
                                <h4>Precio:₡21.000 </h4>
        
                                <input type="number" class="input-number" placeholder="Digite la cantidad">
                                <button type="submit" class="boton">Agregar</button>
                                <h6>Se aplica bajo responsabilidad del cliente*</h6>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                    <h3>Franja Anti sol (visera)</h3>
                                    <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/411lBsPjuqL._AC_SX450_.jpg"
                                        alt="deco" width="220" height="220">
                                    <h4>Precio:₡8.000 </h4>
            
                                    <input type="number" class="input-number" placeholder="Digite la cantidad">
                                    <button type="submit" class="boton">Agregar</button>
                                </div>
                            </div>



            </div>

        </div>
    </div>



    
</body>
</html>