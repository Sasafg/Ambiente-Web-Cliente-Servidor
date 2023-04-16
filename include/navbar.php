



<div class="NAV">

    <ul>
        <a class="navbar-brand" href="#">
        <img src="../imagenes/LOGO.png" alt="" width="100" height="100">
        </a>

        <li><a href="index.php">Nosotros</a></li>
        <li> <a href="articulos.php">Artículos</a></li>
        <li><a href="vehiculos.php">Vehículos</a></li>
        <li><a href="residencia.php">Residencia</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="resenas.php">Reseñas</a></li>
        <li><a href="registro.php">Registro</a></li>
        <li><a href="login.php">LogIn</a></li>
        <li><a href="admin.php" id="adminLink">Opciones Administrador</a></li>
    </ul>

</div>

<script type='text/javascript' src='..\cookie\Cookie.js'></script>
<script>
  var tipoUsuario = getCookie("tipo_usuario");
  if (tipoUsuario !== "1") {
    var adminLink = document.getElementById("adminLink");
    if (adminLink) {
      adminLink.style.display = "none";
    }
  }
</script>