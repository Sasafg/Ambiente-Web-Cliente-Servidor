<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/Contacto.css" />
  <link rel="preload" href="./css/contacto.css" as="style">

</head>

<body>

  <div class="container1">
    <nav>
      <ul>
        <a class="navbar-brand" href="#">
          <img src="../imagenes/LOGO.png" alt="" width="100" height="100">
        </a>

        <li><a href="index.php">Nosotros</a></li>
        <li> <a href="articulos.php">Artículos</a></li>
        <li><a href="vehiculos.php">Vehículos</a></li>
        <li><a href="residencia.php">Residencia</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="registro.php">Registro</a></li>
        <li><a href="#resenas.php">Reseñas</a></li>
      </ul>
    </nav>

    <div class="vacio1"></div>
    <form action="../server/recibeContacto.php" method="POST">
      <h2> Contáctanos </h2>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
      <input type="email" name="correo" id="correo" placeholder="Correo electrónico" required>
      <input type="phone" name="telefono" id="telefono" placeholder="Número de teléfono" required>
      <input type="text" name="tipo_pedido" id="tipo_pedido" placeholder="Tipo" required>
      <input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
      <textarea name="mensaje" id="mensaje" rows="4" placeholder="Mensaje"></textarea>
      <button type="submit">Enviar</button>
    </form>
    <div class="vacio2"></div>
</body>

</html>