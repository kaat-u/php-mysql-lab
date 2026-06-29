<?php
session_start();
require 'conexion.php';
$resultado=$conn->query("SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <h2>Productos</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Acción</th>
    </tr>
    <?php while ($producto = $resultado->fetch_assoc()):?>
        <tr>
            <td><?=$producto['nombre']?></td>
            <td>S/.<?= number_format($producto['precio'],2)?></td>
            <td>
                <a href="agregar.php?id=<?= $producto['id'] ?>">
                    Agregar al Carrito
                </a>    
            </td>    
        </tr>  
        <?php endwhile;?>
    </table>
    <br>
    <a href="carrito.php">Ver Carrito</a>   
</body>
</html>