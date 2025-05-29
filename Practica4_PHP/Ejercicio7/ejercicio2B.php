<?php
// Se crea un array asociativo llamado $matriz con una clave "unamatriz".
// "unamatriz" contiene otro array con claves 6, 13 y "a", y sus respectivos valores 5, 9 y 42.
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));

// Muestra el valor correspondiente a la clave 6 dentro del array "unamatriz", es decir, 5.
echo $matriz["unamatriz"][6];

// Muestra el valor correspondiente a la clave 13 dentro del array "unamatriz", es decir, 9.
echo $matriz["unamatriz"][13];

// Muestra el valor correspondiente a la clave "a" dentro del array "unamatriz", es decir, 42.
echo $matriz["unamatriz"]["a"];

// El código muestra en pantalla: 5942
?>