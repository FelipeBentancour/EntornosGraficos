<?php
include 'datos.php';
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";

// El codigo imprime un warning porque las variables $color y $flor estan definidas solo en el archivo 'datos.php'.
// Por lo tanto, la primera vez que se llama a las variables, no estan definidas y se genera un warning. 
// Luego si se imprime correctamente el mensaje porque las variables ya fueron definidas en el primer include.
