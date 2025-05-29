<?php
$usuarios = ["Felipe_123", "Ana", "pe", "Carlos-99", "Maria!", "usuario_valido", "usuarioMuyLargo-1248648636546"];

function comprobar_nombre_usuario($nombre_usuario)
{
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";

    for ($i = 0; $i < strlen($nombre_usuario); $i++) {
        if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false) {
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
}

foreach ($usuarios as $usuario) {
    comprobar_nombre_usuario($usuario);
}

// El código comprueba si los nombres de usuario en el array $usuarios son válidos según las reglas especificadas.
// Salidas:
// Felipe_123 es válido
// Ana es válido
// pe no es válido
// Carlos-99 es válido
// Maria! no es válido
// usuario_valido es válido
// usuarioMuyLargo-1248648636546 no es válido