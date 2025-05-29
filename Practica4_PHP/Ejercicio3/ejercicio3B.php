<html>

<head>
    <title>Documento 2</title>
</head>

<body>
    <?php
    if (!isset($_POST['submit'])) {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
        </form>
    <?php
    } else {
        $age = $_POST['age'];
        if ($age >= 21) {
            echo 'Mayor de edad';
        } else {
            echo 'Menor de edad';
        }
    }
    ?>
</body>
<!-- Este código muestra un formulario HTML para ingresar la edad. -->
<!-- Cuando el usuario envía el formulario, verifica si la edad ingresada es mayor o igual a 21. -->
<!-- Si es así, muestra "Mayor de edad"; de lo contrario, muestra "Menor de edad". -->
<!-- Lo visualice ejecutando 'php -S localhost:8000' y luego la ruta del archivo en el navegador. -->

</html>