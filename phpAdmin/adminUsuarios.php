<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="preload" href="../css/style.css" as="style">
  <link rel="stylesheet" href="../css/style.css">
  <style> a:hover { color: white; text-decoration: none; font-weight: bold;} </style>
  
</head>

  <body>
  <?php
    include_once '../include/navbar.php';
    ?>

    <div>
        <h1 class="mb-4">Listado de usuarios</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre de usuario</th>
                    <th>Correo electrónico</th>
                    <th>Tipo de Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../conexionDB/conexion.php';

                $conexion = Conecta();

                $query = "SELECT id, nombre, username, correo, tipo FROM usuarios";
                $result = mysqli_query($conexion, $query);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["nombre"]."</td>";
                        echo "<td>".$row["username"]."</td>";
                        echo "<td>".$row["correo"]."</td>";
                        echo "<td>";
                        echo ($row["tipo"] == 1) ? "Administrador" : "Usuario";
                        echo "</td>";
                        echo "<td><a href=\"../phpAdmin/editarUsuario.php?id={$row['id']}\" class='btn btn-primary btn-sm'>Editar</a> <a href=\"../conexionDB/insertaUsuario.php?id={$row['id']}&accion=eliminar\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('¿Está seguro de eliminar este usuario?')\">Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay usuarios registrados</td></tr>";
                }

                Desconecta($conexion);
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>