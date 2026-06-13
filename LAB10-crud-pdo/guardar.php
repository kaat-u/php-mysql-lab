<?php

include 'conexion.php';

$sql = "INSERT INTO usuarios
(nombre,correo,telefono)
VALUES
(:nombre,:correo,:telefono)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nombre',$_POST['nombre']);
$stmt->bindParam(':correo',$_POST['correo']);
$stmt->bindParam(':telefono',$_POST['telefono']);

$stmt->execute();

//Redirecciona al Index.php
header("Location:index.php");

?>
