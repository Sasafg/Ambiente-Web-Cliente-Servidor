<?php

require_once "conexion.php";

echo "<script type='text/javascript' src='..\cookie\Cookie.js'></script>";

function validaUsuario($ing_usuario, $ing_contrasena)
{
    $retorno = false;
    $conexion = Conecta();
    if (mysqli_set_charset($conexion, "utf8")){
        $stmt = $conexion->prepare("select id, tipo from usuarios where username = ? and contrasena = ?");
        $stmt->bind_param("ss", $usuario, $contrasena);

        $usuario = $ing_usuario;
        $contrasena = $ing_contrasena;

        if($stmt->execute()){
            $stmt->store_result();
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($id, $tipo);
                $stmt->fetch();
                
                if ($tipo == 1) {
                    // Guardar cookie con valor 1 para administrador
                    echo "<script>setCookie('tipo_usuario', '1', 1);</script>";
                } else {
                    // Guardar cookie con valor 2 para usuario común
                    echo "<script>setCookie('tipo_usuario', '2', 1);</script>";
                }

                $retorno = true;
            }
        }
    }

    Desconecta($conexion);

    return $retorno;
}

    ?>