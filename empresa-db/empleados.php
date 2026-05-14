<?php
$conexion = new mysqli("localhost", "root", "","empresa_db");
$sql="SELECT * FROM empleados";
$resultado= $conexion->query($sql);
$datos = array();
while ($fila = $resultado->fetch_assoc()) {
    $datos[] = $fila;
}

header('Content-Type: application/json');
echo json_encode($datos);
?>