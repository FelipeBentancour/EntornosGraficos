<?php

// Estructura if-elseif-else para comparar el valor de $i
if ($i == 0) {
    print "i equals 0"; // Si $i es 0, imprime este mensaje
} elseif ($i == 1) {
    print "i equals 1"; // Si $i es 1, imprime este mensaje
} elseif ($i == 2) {
    print "i equals 2"; // Si $i es 2, imprime este mensaje
}

// Estructura switch para comparar el valor de $i
switch ($i) {
    case 0:
        print "i equals 0"; // Si $i es 0, imprime este mensaje
        break;
    case 1:
        print "i equals 1"; // Si $i es 1, imprime este mensaje
        break;
    case 2:
        print "i equals 2"; // Si $i es 2, imprime este mensaje
        break;
}

// Los codigos anteriores son equivalentes, ambos imprimen un mensaje basado en el valor de $i.
?>