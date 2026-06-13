<?php

include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuarios
WHERE id=:id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id',$id);

$stmt->execute();

header("Location:index.php");

?>

