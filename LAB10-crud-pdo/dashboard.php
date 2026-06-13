<?php
$usuario="Carlos Lopez";
?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sistema de Gestión Empresarial</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">

<div class="container-fluid">

<a class="navbar-brand fw-bold" href="#">
<i class="fas fa-building"></i>
 Mantenimiento de Usuarios
</a>

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<!-- INICIO -->

<li class="nav-item">
<a class="nav-link" href="dashboard.php">
<i class="fas fa-home"></i>
 Inicio
</a>
</li>

<!-- MANTENIMIENTO -->

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle"
href="#"
data-bs-toggle="dropdown">

<i class="fas fa-cogs"></i>
 Mantenimiento
</a>

<ul class="dropdown-menu">
    <li>
    <a class="dropdown-item" href="index.php">
    <i class="fas fa-users"></i>
    Usuarios
    </a>
    </li>

    <li>
    <a class="dropdown-item" href="clientes.php">
    <i class="fas fa-user-friends"></i>
    Clientes
    </a>
    </li>

    <li>
    <a class="dropdown-item" href="productos.php">
    <i class="fas fa-box"></i>
    Productos
    </a>
    </li>

    <li>
    <a class="dropdown-item" href="categorias.php">
    <i class="fas fa-tags"></i>
    Categorías
    </a>
    </li>

     <li>
    <a class="dropdown-item" href="categorias.php">
    <i class="fas fa-tags"></i>
    Cerrar
    </a>
    </li>

</ul>

</li>

<!-- FACTURACION -->

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle"
href="#"
data-bs-toggle="dropdown">

<i class="fas fa-file-invoice-dollar"></i>
 Facturación

</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href="ventas.php">
<i class="fas fa-cash-register"></i>
 Ventas
</a>
</li>

<li>
<a class="dropdown-item" href="facturas.php">
<i class="fas fa-file-invoice"></i>
 Facturas
</a>
</li>

<li>
<a class="dropdown-item" href="cotizaciones.php">
<i class="fas fa-receipt"></i>
 Cotizaciones
</a>
</li>

<li>
<a class="dropdown-item" href="pagos.php">
<i class="fas fa-money-bill-wave"></i>
 Pagos
</a>
</li>

</ul>

</li>

<!-- REPORTES -->

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle"
href="#"
data-bs-toggle="dropdown">

<i class="fas fa-chart-bar"></i>
 Reportes

</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href="reporte_ventas.php">
<i class="fas fa-chart-line"></i>
 Ventas
</a>
</li>

<li>
<a class="dropdown-item" href="reporte_clientes.php">
<i class="fas fa-users"></i>
 Clientes
</a>
</li>

<li>
<a class="dropdown-item" href="reporte_productos.php">
<i class="fas fa-boxes"></i>
 Productos
</a>
</li>

<li>
<a class="dropdown-item" href="reporte_utilidades.php">
<i class="fas fa-coins"></i>
 Utilidades
</a>
</li>

</ul>

</li>

</ul>

<!-- Usuario -->

<span class="navbar-text text-white me-3">

<i class="fas fa-user-circle"></i>
 <?= $usuario ?>

</span>

<a href="logout.php"
class="btn btn-danger btn-sm">

<i class="fas fa-sign-out-alt"></i>
 Salir

</a>

</div>

</div>

</nav>

<!-- CONTENIDO -->

<div class="container mt-5">

<div class="card shadow border-0">

<div class="card-body text-center">

<h2 class="fw-bold">
Bienvenido <?= $usuario ?>
</h2>

<p class="text-muted">
Sistema de Gestión Empresarial
</p>

<i class="fas fa-chart-line fa-5x text-success"></i>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
