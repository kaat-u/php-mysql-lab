<?php
session_start();
//Si el usuario es incorrecto o vacio me redirige al login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio</title>
</head>
<body>

<h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>
