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
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
<?php
    include_once '../include/navbar.php';
    ?>

  <div class="container1">

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