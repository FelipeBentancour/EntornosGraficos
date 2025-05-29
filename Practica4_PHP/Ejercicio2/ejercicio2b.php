<?php
// Imprime los números del 1 al 10 usando un bucle for tradicional
for ($i = 1; $i <= 10; $i++) {
    print $i;
}

// Hace lo mismo, pero imprime y aumenta $i en la expresión de incremento del for
for ($i = 1; $i <= 10; print $i, $i++);

// Usa un for sin condición de finalización, pero sale con break cuando $i > 10
for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}

// Bucle infinito for, controlado por break y un contador manual
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}
// Los codigos anteriores son equivalenetes, imprimen los números del 1 al 10.
?>
