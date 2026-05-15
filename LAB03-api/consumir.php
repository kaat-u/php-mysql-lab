<?php
// EndPoint punto de acceso para consumir el Web Service
$url = "http://localhost/6371/LAB03/servicio.php";
$respuesta = file_get_contents($url);
$productos = json_decode($respuesta, true);

foreach($productos as $p) {
    echo "id: ".$p['id']."<br>";
    echo "Nombre: ".$p['nombre']."<br>";
    echo "Precio: ".$p['precio']."<br>";
    echo "======================<br>";
}

?>
