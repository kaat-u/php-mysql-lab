<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tienda_db";

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_error){
    die("Error de conexión");
}

?>