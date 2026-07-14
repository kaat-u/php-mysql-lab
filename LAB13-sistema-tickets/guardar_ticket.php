<?php
include("conexion.php");
session_start();

$t = $_POST["titulo"];
$d = $_POST["descripcion"];

$id = $_SESSION["id"];

$sql = "INSERT INTO tickets(titulo,descripcion,id_cliente)
VALUES
('$t','$d','$id')";

mysqli_query($cn, $sql);
header("Location:cliente.php")

    ?>