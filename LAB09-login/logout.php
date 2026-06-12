<?php
//Inicializando las variables de session
session_start();
session_destroy();
//Redirigir al login.php
header("Location: login.php");
exit;
?>
