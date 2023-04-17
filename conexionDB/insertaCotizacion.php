<?php

// require_once "conexion.php";
// function ingresaUsuario
// ($pNombre, $pUsername, $pCorreo, $pPassword, $pTipo)
// {
//     $retorno = false;
//     $conexion = Conecta();
    
//     // formato de datos utf8
//     if (mysqli_set_charset($conexion, "utf8")){
//         $stmt = $conexion->prepare("Insert into usuarios (id, nombre, username, correo, contrasena, tipo)
//                                         values(?,?,?,?,?,?)");
//         $stmt->bind_param("issssi", $iAuto, $iNombre, $iUsername, $iCorreo, $iPassword, $iTipo);

//         //set parametros y ejecutar
//         $iAuto = '';
//         $iNombre = $pNombre;
//         $iUsername = $pUsername;
//         $iCorreo = $pCorreo;
//         $iPassword = $pPassword;
//         $iTipo = $pTipo;

//         if($stmt->execute()){
//             $retorno = true;
//         }
//     }

//     Desconecta($conexion);

//     return $retorno;

