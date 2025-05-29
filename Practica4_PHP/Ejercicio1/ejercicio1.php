<?php

// Definición de la función 'doble' que recibe un parámetro entero y retorna su doble
function doble($i) {
    return $i * 2;
}

// Declaración de variables con diferentes tipos
$a = TRUE;      // booleano
$b = "xyz";     // string (comillas dobles)
$c = 'xyz';     // string (comillas simples)
$d = 12;        // entero

// Muestra el tipo de cada variable por pantalla
echo gettype($a); // boolean
echo gettype($b); // string
echo gettype($c); // string
echo gettype($d); // integer

// Estructura de control: si $d es entero, le suma 4
if (is_int($d)) {
    $d += 4;
}

// Estructura de control: si $a es string, muestra un mensaje (no se ejecuta porque $a es boolean)
if (is_string($a)) {
    echo "Cadena: $a";
}

// Operador ternario: si $a es verdadero, incrementa $d en 1; si no, multiplica $d por 3
$d = $a ? ++$d : $d * 3;

// Llama a la función 'doble' con $d (luego incrementa $d) y asigna el resultado a $f
$f = doble($d++);

// Suma 10 a $f y asigna el resultado a $g (y también a $f)
$g = $f += 10;

// Muestra los valores de las variables por pantalla
echo $a, $b, $c, $d, $f, $g;
?>