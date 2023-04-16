<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Subir Archivos</title>
</head>
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
    </div>
    
    <div style="margin-left: 10%;">
        <?php
        echo "<a href='./productoNuevo.php'>Siguiente</a>";
        ?>
    </div>

    
    
    <script type="text/javascript" src="main.js"></script>
</body>
</html>