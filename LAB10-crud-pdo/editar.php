<?php

include 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id=:id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id',$id);

$stmt->execute();

$usuario = $stmt->fetch();

include './includes/header.php';

?>

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Editar Usuario</h3>

</div>

<div class="card-body">

<form action="actualizar.php" method="POST">

<input type="hidden"
name="id"
value="<?= $usuario['id'] ?>">

<div class="mb-3">

<label>Nombre</label>

<input type="text"
name="nombre"
value="<?= $usuario['nombre'] ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Correo</label>

<input type="email"
name="correo"
value="<?= $usuario['correo'] ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Teléfono</label>

<input type="text"
name="telefono"
value="<?= $usuario['telefono'] ?>"
class="form-control">

</div>

<button class="btn btn-success">
Actualizar
</button>

</form>

</div>

</div>

<?php include './includes/footer.php'; ?>
