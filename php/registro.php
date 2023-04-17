<!DOCTYPE html>
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
    <link rel="preload" href="./css/style.css" as="style">
    <link rel="stylesheet" href="../css/Contacto.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("form-login").submit();
   }
 </script>

    <title>Registro</title>
</head>
<!-- Incluye el navbar ubicado en la carpeta Include -->
<?php
include_once '../include/navbar.php';
?>

<body>


    <form id="form-login" action="../server/recibeRegistro.php" action="validar.php" method="POST">
        <h2> Registrese </h2>
        <!-- Nombre -->
        <div class="registro">
            <!-- <label for="nombre">Nombre completo</label> -->
            <input type="text" name="nombre" id="nombre" pattern="[A-Za-z]+" required placeholder="Nombre completo"
                oninput="setCookie('nombre',value,1)">
            <!-- Username -->
            <!-- <label for="username">Username</label> -->
            <input type="text" name="username" id="username" required placeholder="Username"
                oninput="noespacios('username',value)">
            <!-- Correo -->
            <!-- <label for="correo">Correo</label> -->
            <input type="text" name="correo" id="correo" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,6}$"
                required placeholder="Correo" oninput="setCookie('correo',value,1)">
            <!-- Contraseña -->
            <!-- <label for="password">Contraseña</label> -->
            <input type="password" name="password" id="password" minlength="8" required placeholder="Contraseña">
            <!-- Validación contraseña -->
            <!-- <label for="password2">Reingrese la contraseña</label> -->
            <input type="password" name="password2" id="password2" minlength="8" required 
             placeholder="Reingrese contraseña" oninput="validaContrasena(getElementById('password').value, getElementById('password2').value)">
        </div>
<!-- 
   <button type="button"  id="entrar" onclick="procesaRegistro()">Registrarse</button> -->
   <button class="g-recaptcha"  data-sitekey="6LcFHpYlAAAAAF4K5pyPFuULehmqRWY0QNF_ta1S"  data-callback='onSubmit'  data-action='submit'>Registrarse</button>


        <?php

        
        echo "<br>";
        require_once '../include/alertas.php';
        ?>
    </form>
    </div>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>

</html>