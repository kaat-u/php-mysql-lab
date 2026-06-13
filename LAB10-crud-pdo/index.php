<?php
    include 'conexion.php';

    $sql = "SELECT * FROM usuarios";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $usuarios = $stmt->fetchAll();

    include './includes/header.php';

?>

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>Listado de Usuarios</h3>

</div>

<div class="card-body">

<a href="crear.php" class="btn btn-primary mb-3">
Nuevo Usuario
</a>

<table class="table table-bordered table-hover">

<thead>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php foreach($usuarios as $usuario): ?>

<tr>

<td><?= $usuario['id'] ?></td>
<td><?= $usuario['nombre'] ?></td>
<td><?= $usuario['correo'] ?></td>
<td><?= $usuario['telefono'] ?></td>

<td>

<a href="editar.php?id=<?= $usuario['id'] ?>"
class="btn btn-warning btn-sm">
Editar
</a>

<a href="eliminar.php?id=<?= $usuario['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar registro?')">
Eliminar
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

<?php include './includes/footer.php'; ?>
