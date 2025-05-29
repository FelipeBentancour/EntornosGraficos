<html>

<head>
    <title>Documento 1</title>
</head>

<body>
    <?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col; $c++) {
            echo "<td>&nbsp;</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>
<!-- El código crea una tabla HTML con 5 filas y 2 columnas, donde cada celda está vacía. -->
<!-- Lo visualice ejecutando 'php -S localhost:8000' y luego la ruta del archivo en el navegador. -->
</html>