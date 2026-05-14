<?php
$url = "http://localhost/6371/PA1/empleados.php";
$respuesta = file_get_contents($url);
$empleados = json_decode($respuesta, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos de la Empresa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Lista de Empleados</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Fecha de Registro</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($empleados as $empleado): ?>
        <tr>
            <td><?php echo $empleado['id']; ?></td>
            <td><?php echo $empleado['nombre']; ?></td>
            <td><?php echo $empleado['apellido']; ?></td>
            <td><?php echo $empleado['correo']; ?></td>
            <td><?php echo $empleado['telefono']; ?></td>
            <td><?php echo $empleado['fecha_registro']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body> 
</html>