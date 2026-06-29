<?php
session_start();
require 'conexion.php';

//tomando el id seleccionado de la pagina INDEX
$id = (int)$_GET['id'];

$sql = "SELECT * FROM productos WHERE id = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {

    $producto = $resultado->fetch_assoc();

    //Creando la variable de session
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
    //Si el producto ya se agrego aumenta la cantidad
    if (isset($_SESSION['carrito'][$id])) {

        $_SESSION['carrito'][$id]['cantidad']++;
    //Si el producto no se agrego o primera vez agrega id,nombre,precio a la session
    } else {

        $_SESSION['carrito'][$id] = [
            'id' => $producto['id'],
            'nombre' => $producto['nombre'],
            'precio' => $producto['precio'],
            'cantidad' => 1
        ];
    }
}
//Nos rederije al al carrito.php
header("Location: carrito.php");
exit;
