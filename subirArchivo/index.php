<!DOCTYPE html>
<html>

<head>
    <title>Subir archivo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="main.css">

</head>

<?php
include_once '../include/navbar.php';
?>
<body>
    
    <div class="principal">
        <h3>Imagen del producto</h3>
    <form action="" id="form_subir" method="POST">
        

        <div class="form-1-2">
            <label for="">Archivo a subir:</label>
    
            <input type="file" name="archivo" required>
        </div>
    
        <div class="barra">
            <div class="barra_azul" id="barra_estado">
                <span></span>
            </div>
        </div>
        <P></P>
    
        <div class="acciones">
            <input type="submit" class="btn" name="Enviar" value="Cargar">
            <!-- <input type="button" class="cancel" id="cancelar" value="Cancelar"> -->
        </div>
    
    </form>

    <div style="margin-left: 10%;">
        <?php
        echo "<a style='color:black;' href='./productoNuevo.php'>Siguiente</a>";
        ?>
    </div>
    </div>
    
    
    
    <script type="text/javascript" src="main.js"></script>
</body>
</html>