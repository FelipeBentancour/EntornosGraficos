<?php
// Crea un array asociativo con dos elementos: clave 5 => 1 y clave 12 => 2
$matriz = array(5 => 1, 12 => 2);

// Agrega un nuevo elemento al final del array con la siguiente clave numérica disponible (13) y valor 56
$matriz[] = 56;

// Agrega un nuevo elemento con clave "x" y valor 42
$matriz["x"] = 42;

// Elimina el elemento con clave 5 del array
unset($matriz[5]);

// Elimina completamente la variable $matriz
unset($matriz);
?>