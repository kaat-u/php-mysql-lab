<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$sql = "INSERT INTO interesados (nombre, correo, telefono) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $telefono);
$stmt->execute();
//Enviar el correo al admin
//include("enviar_correo.php");
echo "
  <script>
    alert('Registro enviado correctamente gracias por su interes');
    location.href='index.php'
  </script>
  ";
  ?>
