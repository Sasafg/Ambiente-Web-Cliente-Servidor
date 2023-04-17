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

    <title>Registro</title>
</head>
<!-- Incluye el navbar ubicado en la carpeta Include -->
<?php
include_once '../include/navbar.php';
?>

<body>



    <div class="container1">
        <div class="vacio1"></div>

        <form action="../server/recibeRegistro.php" method="POST">
            <h2> Registrese </h2>
            <!-- Nombre -->
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
                placeholder="Reingrese contraseña"
                oninput="validaContrasena(getElementById('password').value, getElementById('password2').value)">

            <button type="submit" onclick="procesaRegistro()">Registrarse</button>
            <?php
            echo "<br>";
            require_once '../include/alertas.php';
            ?>
        </form>
        <div class="vacio2"></div>
    </div>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>

</html>