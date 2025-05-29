<?php
function sumar($sumando1, $sumando2)
{
    $suma = $sumando1 + $sumando2;  // Suma los dos números y almacena el resultado en la variable $suma
    echo $sumando1 . "+" . $sumando2 . "=" . $suma; // Muestra el resultado de la suma en un formato específico
}
sumar(7, 6);    // Llama a la función sumar con los argumentos 7 y 6, lo que imprimirá "7+6=13"
