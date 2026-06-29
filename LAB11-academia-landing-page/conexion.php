<?php

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "bd_academia"
);

if($conexion->connect_error){
    die("Error de conexión");
}
?>
