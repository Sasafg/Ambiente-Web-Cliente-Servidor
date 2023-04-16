<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Subir Archivos</title>
</head>
<body>

    <form action="../server/recibeProducto.php" method = POST>
        <div>
            <input type="text" name="rutaProd" id="rutaProd"
            placeholder="Nombre Imagen" disabled>
        </div>
        <p></p>
        <h3>Ingresando un producto</h3>
        <span id="sProd">
            <label for="artL">Articulo</label>
            <input id="tipoProducto" type="radio" name="tipoProducto" value='articulos' checked="checked" />
            <p></p>
            <label for="vehL">Vehiculos</label>
            <input id="tipoProducto" type="radio" name="tipoProducto" value='vehiculos' />
            <p></p>
            <label for="resL">Residencial</label>
            <input id="tipoProducto" type="radio" name="tipoProducto" value='residencias' />
            <p></p>
        </span><br />
        <div>
            <input type="text" name="nombreProducto" id="nombreProducto" pattern="[A-Za-z]+" required 
            placeholder="Nombre" onlick="document.getElementById(rutaProd).setAttribute('value', 'nombre');">
        </div>
        <div>
            <input type="text" name="precioProducto" id="precioProducto" pattern="^[0-9]{0,12}([,][0-9]{2,2})?$" required 
            placeholder="Precio">
        </div>
        <div>
            <textarea name="descProducto" id="descProducto" rows="4" placeholder="Descripcion"></textarea>
        </div>
        <input type="submit" class="btn" name="procesar" value="Procesar">
        </form>
    
    </div>
    
    <script type="text/javascript" src="main.js"></script>
</body>
</html>