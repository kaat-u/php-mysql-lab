<?php include './includes/header.php'; ?>

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Nuevo Usuario</h3>

</div>

<div class="card-body">

<form action="guardar.php" method="POST">

<div class="mb-3">

<label>Nombre</label>

<input type="text"
name="nombre"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Correo</label>

<input type="email"
name="correo"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Teléfono</label>

<input type="text"
name="telefono"
class="form-control">

</div>

<button class="btn btn-success">
Guardar
</button>

<a href="index.php"
class="btn btn-secondary">
Volver
</a>

</form>

</div>

</div>

<?php include './includes/footer.php'; ?>
