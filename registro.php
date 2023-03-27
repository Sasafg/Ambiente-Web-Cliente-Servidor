<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    
    <!-- Incluye el navbar ubicado en la carpeta Include -->
    <?php
    include_once '../include/navbar.php';
    ?>

    <form action="../server/recibeRegistro.php" method="POST">
        <!-- Nombre -->
        <div class="registro">
            <label for="nombre">Nombre completo</label>
            <input type="text" name="nombre" id="nombre" pattern="[A-Za-z]+" required oninput="setCookie('nombre',value,1)">
        </div>
        <!-- Username -->
        <div class="registro">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required oninput="noespacios('username',value)">
        </div>
        <!-- Correo -->
        <div class="registro">
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,6}$" required oninput="setCookie('correo',value,1)">
        </div>
        <!-- Contraseña -->
        <div class="registro">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" minlength="8" required>
        </div>
        <!-- Validación contraseña -->
        <div class="registro">
            <label for="password2">Reingrese la contraseña</label>
            <input type="password" name="password2" id="password2" minlength="8" required>
        </div>

        <button type="submit" onclick="procesaRegistro()">Registrarse</button>
    </form>

    <script src="../cookie/Cookie.js"></script>
    <script src="../js/scriptRegistro.js"></script>

</body>
</html>