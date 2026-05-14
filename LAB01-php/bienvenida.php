<?php
$nombre = "";
// Verificamos si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenida</title>
</head>
<body>
<?php if ($nombre == "") { ?>
    <!-- FORMULARIO -->
    <h2>Ingresa tu nombre</h2>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
<?php } else { ?>
    <!-- BIENVENIDA -->
    <h1>Bienvenido <?php echo $nombre; ?></h1>
<?php } ?>
</body>
</html>