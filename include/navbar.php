



<div class="NAV">

    <ul>
        <a class="navbar-brand" href="#">
        <img src="../imagenes/LOGO.png" alt="" width="100" height="100">
        </a>

        <li><a href="../php/index.php">Nosotros</a></li>
        <li><a href="../php/articulos.php">Artículos</a></li>
        <li><a href="../php/vehiculos.php">Vehículos</a></li>
        <li><a href="../php/residencia.php">Residencia</a></li>
        <li><a href="../php/contacto.php">Contacto</a></li>
        <li><a href="../php/resenas.php">Reseñas</a></li>
        <li><a href="../php/registro.php">Registro</a></li>
        <li><a href="../php/login.php">LogIn</a></li>
        <li><a href="../php/admin.php" id="adminLink">Opciones Administrador</a></li>
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