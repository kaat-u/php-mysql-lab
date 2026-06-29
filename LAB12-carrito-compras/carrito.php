<?php
session_start();

//Cargando la informacion de la session a la variable $carrito
$carrito = $_SESSION['carrito'] ?? [];

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>

<h2>Carrito de Compras</h2>

<?php if (empty($carrito)): ?>

<p>El carrito está vacío.</p>

<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
        <th>Acción</th>
    </tr>

    <?php foreach($carrito as $item): ?>

        <?php
        $subtotal = $item['precio'] * $item['cantidad'];
        $total += $subtotal;
        ?>

        <tr>
            <td><?= $item['nombre'] ?></td>
            <td>S/ <?= number_format($item['precio'], 2) ?></td>
            <td><?= $item['cantidad'] ?></td>
            <td>S/ <?= number_format($subtotal, 2) ?></td>
            <td>
                <a href="eliminar.php?id=<?= $item['id'] ?>">
                    Quitar
                </a>
            </td>
        </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="3" align="right">
            <strong>Total:</strong>
        </td>
        <td colspan="2">
            <strong>S/ <?= number_format($total, 2) ?></strong>
        </td>
    </tr>

</table>

<?php endif; ?>

<br>

<a href="index.php">Seguir comprando</a>

</body>
</html>

