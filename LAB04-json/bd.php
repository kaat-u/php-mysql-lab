<?php
$host ="localhost";
$db ="api_demo";
$user ="root";
$pass ="";

try {
    // El Driver PDO me permite conectarme a una BD de mysql y cualquier otro motor
    // Y es orientado a objetos
    // Bloque de código a evaluar
        $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
        exit;
    }


?>
