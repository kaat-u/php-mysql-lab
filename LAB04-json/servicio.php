<?php
header("Content-Type:application/json");
require_once "bd.php";

$method = $_SERVER["REQUEST_METHOD"]; //GET, POST, PUT, DELETE

switch ($method) {
    // Obtener los datos
    case 'GET':
        $stmt = $conexion->query("SELECT * FROM usuarios");
        $usuarios =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Lo codifico en JSON
        echo json_encode($usuarios);
        break;

    case 'POST': // Insertar información en la BD
        // Lo decodifica, lo convierte en campos individuales
        $data = json_decode(file_get_contents("php://input"), true);

        if (!isset($data['nombre']) || !isset($data['email'])) {
            echo json_encode(["error" => "Faltan datos"]);
            exit;
        }


        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
        $stmt->execute([$data['nombre'], $data['email']]);

        echo json_encode([
            "mensaje" => "Usuario creado",
            // Devolver el último ID creado el Primary Key
            "id" => $conexion->lastInsertId()
        ]);
        break;

    default:
        echo json_encode(["error"=>"Método no permitido"]);
        break;
}