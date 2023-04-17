<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Contacto.css" />
  <link rel="preload" href="../css/contacto.css" as="style">
  <link rel="stylesheet" href="../css/style.css">

</head>

<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        echo "No se recibió el id del usuario a editar";
        exit;
    }
?>

<?php
    include_once '../include/navbar.php';
?>

<body>

  <div class="container1">
    <div class="vacio1"></div>
    <form action="../server/actualizaUsuario.php" method="POST" onsubmit="return validarFormulario()">
      <h2> Editar usuario </h2>
      <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
      <input type="text" name="nombre" id="nombre" placeholder="Nombre">
      <input type="text" name="username" id="username" placeholder="Username" 
            oninput="noespacios('username',value)">
      <input type="email" name="correo" id="correo" placeholder="Correo electrónico">
      <input type="password" name="contrasena" id="contrasena" minlength="8" placeholder="Contraseña">
      <input type="password" name="contrasena2" id="contrasena2" minlength="8" 
             placeholder="Reingrese contraseña" oninput="validaContrasena(getElementById('password').value, getElementById('password2').value)">
             <label for="tipo">Tipo:</label>
  <select name="tipo" id="tipo">
    <option value="1">Administrador</option>
    <option value="2">Usuario</option>
  </select>
      <button type="submit">Enviar</button>
    </form>
    <div class="vacio2"></div>

    <script src="../js/scriptRegistro.js"></script>
    <script>
    function validarFormulario() {
    var contrasena = document.getElementById('contrasena').value;
    var contrasena2 = document.getElementById('contrasena2').value;
  
    if (contrasena !== '') {
      if (contrasena !== contrasena2) {
        alert('Las contraseñas no coinciden');
        return false;
      }
    }
  
    return true;
  }</script>
    

</body>

</html>