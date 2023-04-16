
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="preload" href="./css/index.css" as="style">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
<?php
    include_once '../include/navbar.php';
    require_once '../include/obtieneRequets.php';
    require_once '../conexionDB/insertaNosotros.php';
    $pID = 1;
    ?>

    <div class="container">

        <main>
            <h2 id="titulo_ad">Acerca de nosostros</h2>
            <p class="acerca_de">
                <?php
                $varRef = "acerca";
                consultaInfo($pID, $varRef);
                ?>
            </p>
            <h2 id="vision">Vision</h2>
            <p class="acerca_de">
                <?php
                $varRef = "vision";
                consultaInfo($pID, $varRef);
                ?>
            </p>
            <h2 id="mision">Mision</h2>
            <p class="acerca_de">
                <?php
                $varRef = "mision";
                consultaInfo($pID, $varRef);
                ?>
            </p>
        </main>


        <div id="equipo">
            <h2>Nuestro Equipo</h2>
        </div>
        <div class="miembro1">
            <h2>Saray Fajardo</h2>
            <p class="title">Gerente General</p>
            <p>saray@example.com</p>
            <p><button class="button">Contactar</button></p>
        </div>
        <div id="miembro2">
            <h2>Karina Madrigal</h2>
            <p class="title">Jefa de Talento Humano</p>
            <p>karina@example.com</p>
            <p><button class="button">Contactar</button></p>
        </div>
        <div id="miembro3">
            <h2>Anthony Ruíz</h2>
            <p class="title">Jefe de Inventarios</p>
            <p>anthony@example.com</p>
            <p><button class="button">Contactar</button></p>
        </div>
        <div id="miembro4">
            <h2>Andrey Solis</h2>
            <p class="title">Jefe de Logistica</p>
            <p>andrey@example.com</p>
            <p><button class="button">Contactar</button></p>
        </div>
        <footer>
            <svg viewBox="0 0 512 512" width="30" title="envelope">
                <path id="envelope" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
            </svg>
        </footer>
    </div>

</body>

</html>