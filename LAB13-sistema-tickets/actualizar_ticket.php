<?php

include("conexion.php");

$id = $_POST["id"];
$estado = $_POST["estado"];
$respuesta = $_POST["respuesta"];

$idSoporte = $_SESSION["id"];

$sql = "UPDATE tickets SET

estado='$estado',

respuesta='$respuesta',

id_soporte=$idSoporte

WHERE id=$id";

mysqli_query($cn, $sql);

header("Location:soporte.php");

?>