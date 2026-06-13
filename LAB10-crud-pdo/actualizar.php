<?php

include 'conexion.php';

$sql = "UPDATE usuarios SET

nombre=:nombre,
correo=:correo,
telefono=:telefono

WHERE id=:id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nombre',$_POST['nombre']);
$stmt->bindParam(':correo',$_POST['correo']);
$stmt->bindParam(':telefono',$_POST['telefono']);
$stmt->bindParam(':id',$_POST['id']);

$stmt->execute();

header("Location:index.php");

?>
