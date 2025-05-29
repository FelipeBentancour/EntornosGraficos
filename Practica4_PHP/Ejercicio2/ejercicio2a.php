<?php
// Primer bucle while: imprime los números del 1 al 10
$i = 1;
while ($i <= 10) {
    print $i++;
}

// Segundo bucle while con sintaxis alternativa: imprime los números del 1 al 10
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;

// Bucle do-while: imprime los números del 1 al 10
$i = 0;
do {
    print ++$i;
} while ($i < 10);

// Los codigos anteriores son equivalentes, todos imprimen los números del 1 al 10.
?>
