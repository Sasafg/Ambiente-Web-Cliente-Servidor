<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@100;500&family=Open+Sans&display=swap"
        rel="stylesheet">

</head>

<?php
include_once '../include/navbar.php';
?>

<body>

    <form action="../server/recibeCotizacion.php" method="POST">

        <div class="cotizacion">
            <input type="text" name="articulo" id="Articulo" oninput="">
        </div>

        <div class="cotizacion">
            <input type="text" name="cantidad" id="Cantidad" oninput="">

            <div class="cotizacion">
                <input type="text" name="nombre" id="nombre" pattern="[A-Za-z]+" required placeholder="Nombre completo"
                    oninput="setCookie('nombre',value,1)">
            </div>
            <div class="cotizacion">
            <input type="text" name="correo" id="correo" 
            pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,6}$" required placeholder="Correo" 
            oninput="setCookie('correo',value,1)">

            <button type="submit" onclick="Enviado correctamente!">Solicitar Cotización</button>

        </div>
        </div>





</body>




</html>

//***********IMPLEMENTACCION DE COTIZACION DETENIDA POR FALTA DE TIEMPO*************** -->