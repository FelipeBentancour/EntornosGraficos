<?php
include("db.php");


$id = $_GET['id'];

if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = [];
}

if (!in_array($id, $_SESSION['carrito'])) {
  $_SESSION['carrito'][] = $id;
}

header("Location: catalogo.php");
exit;
?>