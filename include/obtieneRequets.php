<?php
function recogePost($var, $m ="")
{
    //isset devuelve false cuando la variable es null
    if(!isset($_POST[$var])){
        //es un arreglo 
        $tmp = (is_array($m) ? [] : "");
    }elseif(!is_array($_POST[$var])){
        //trim quita del inicio y fin caracteres en blanco
        //htmlspecialchars: convierte caracteres especiales en entidades html
        // ENT_COMPAT : predeterminado. codifica comillas dobles
        // ENT_QUOTES - Codifica comillas dobles y simples
        // ENT_NOQUOUTES - no codifica ninguna cita
        $tmp = trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_POST[$var];
        //La función array_walk_recursive ejecuta cada elemento de la matriz en un función definida por el usuario.
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

function recogeGet($var, $m ="")
{
    //isset devuelve false cuando la variable es null
    if(!isset($_GET[$var])){
        //es un arreglo 
        $tmp = (is_array($m) ? [] : "");
    }elseif(!is_array($_GET[$var])){
        //trim quita del inicio y fin caracteres en blanco
        //htmlspecialchars: convierte caracteres especiales en entidades html
        // ENT_COMPAT : predeterminado. codifica comillas dobles
        // ENT_QUOTES - Codifica comillas dobles y simples
        // ENT_NOQUOUTES - no codifica ninguna cita
        $tmp = trim(htmlspecialchars($_GET[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_GET[$var];
        //La función array_walk_recursive ejecuta cada elemento de la matriz en un función definida por el usuario.
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

function recogeRequest($var, $m ="")
{
    //isset devuelve false cuando la variable es null
    if(!isset($_REQUEST[$var])){
        //es un arreglo 
        $tmp = (is_array($m) ? [] : "");
    }elseif(!is_array($_REQUEST[$var])){
        //trim quita del inicio y fin caracteres en blanco
        //htmlspecialchars: convierte caracteres especiales en entidades html
        // ENT_COMPAT : predeterminado. codifica comillas dobles
        // ENT_QUOTES - Codifica comillas dobles y simples
        // ENT_NOQUOUTES - no codifica ninguna cita
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_REQUEST[$var];
        //La función array_walk_recursive ejecuta cada elemento de la matriz en un función definida por el usuario.
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}
?>