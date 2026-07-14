<?php
include("conexion.php");

$user = $_POST["usuario"];
$pass = md5($_POST["password"]);

$sql = "select * from usuarios
 where usuario='$user' 
 AND password='$pass'";

$r = mysqli_query($cn, $sql);
if (mysqli_num_rows($r) > 0) {
    $u = mysqli_fetch_assoc($r);
    $_SESSION["id"] = $u["id"];
    $_SESSION["nombre"] = $u["nombre"];
    $_SESSION["rol"] = $u["rol"];
    if ($u["rol"] == "cliente") {
        header("Location:cliente.php");
    } else {
        header("Location:soporte.php");
    }
} else {
    echo "Datos Incorrectos";
}
?>