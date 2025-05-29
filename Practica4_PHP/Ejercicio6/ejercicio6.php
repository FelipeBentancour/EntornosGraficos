<?php
$a = array(
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
);

$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;

// Sí, estos dos bloques de código son equivalentes.
// Ambos crean un array asociativo con las mismas claves y valores, y agregan el valor 4 como un elemento con índice numérico.