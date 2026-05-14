<?php
$servername="localhost"; // Todos los "$" son variables, y se asignan los valores correspondientes para la conexión a la base de datos.
$username="root";
$password="";
$dbname="elecciones_peru";
// Crear la conexión
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Conexión fallida" .$conn->connect_error);
} 

// Consultar candidatos ordenados por votos
$sql="SELECT * FROM candidatos ORDER BY votos DESC";

// La variable result es donde se almacena los registros de la tabla
$result=$conn->query($sql);
// Crear la variable para almacenar la cantidad de votos
$total_votos=0;
while ($row = $result->fetch_assoc()) {
    // Acumulado la columna votos
    $total_votos += $row['votos'];
}
$result=$conn->query($sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Elecciones Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Resultados 2026</h1>
    <div class="candidatos-container"> 
    <?php 
    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) { 
            $porcentaje = ($total_votos>0) ?($row['votos'] / $total_votos)*100:0;
            echo '<div class="candidato">'; 
            echo '<img src="'.$row['logo'].'" alt="'.$row['nombre'].'">'; 
            echo '<div class="nombre">'.$row['nombre'].'</div>'; 
            echo '<div class="partido">'.$row['partido'].'</div>'; 
            echo '<div class="ciudad">'.$row['ciudad'].'</div>'; 
            echo '<div class="votos">'.number_format($row['votos']).' votos</div>';
            echo '<div class="porcentaje">'.number_format($porcentaje,2).'%</div>';  
            echo '</div>'; 
        } 
} else { 
    echo "No hay candidatos registrados."; 
} 
$conn->close(); 
?> 

</div> 
</body> 
</html>