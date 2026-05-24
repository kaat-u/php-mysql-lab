<?php

$host = "localhost";
$db = "tienda_php";
$user = "root";
$pass = "";

try {

    $conexion = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch(PDOException $e){

    die("Error : " . $e->getMessage());

}

//CONSULTA A LA TABLA CATEGORIAS BACKEND
$sql = "select * from categorias";
$smt = $conexion->prepare($sql);
$smt ->execute();
$categorias = $smt->fetchAll(PDO::FETCH_ASSOC);
//Obtener el ID de la categoria seleccionada
$categoriaSeleccionada = $_GET['categoria'] ?? "";
//Consultar Productos por categoria
$productos=[];
if($categoriaSeleccionada !="") {
    $sqlProductos = "select * from productos 
                  where categoria_id=:categoria_id";
    $stmtProductos = $conexion->prepare($sqlProductos);  
    //Enlanzando el parametro con la variable
    $stmtProductos -> bindParam(":categoria_id",$categoriaSeleccionada);
    $stmtProductos ->execute();
    $productos = $stmtProductos ->fetchAll(PDO::FETCH_ASSOC);            
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Categorias</title>
</head>
<body>
    <h2>Seleccionar la categoria para mostrar los productos</h2>
    <form method="GET">
    <select name="categoria" onchange="this.form.submit()">
      <option value="">--Seleccione--</option>
      <?php foreach($categorias as $fila) { ?>
        <option value="<?php echo $fila['id'];?>">
             <?php 
               if ($categoriaSeleccionada == $fila['id']) {
                 echo "selected";
               }
               ?>
            <?php echo $fila['nombre'];?>
        </option>    
      <?php } ?>
    </select>   
</form>   
<?php if ($categoriaSeleccionada !="") { ?>
   <table>
        <tr>
            <th>ID</th>
            <th>PRODUCTO</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>STOCK</th>
        </tr>
        <?php foreach($productos as $producto) {?>
           <tr>

                <td>
                    <?php echo $producto['id']; ?>
                </td>

                <td>
                    <?php echo $producto['nombre']; ?>
                </td>

                <td>
                    <?php echo $producto['descripcion']; ?>
                </td>

                <td>
                    S/. <?php echo $producto['precio']; ?>
                </td>

                <td>
                    <?php echo $producto['stock']; ?>
                </td>

            </tr>
            <?php } ?>
    </table>    
  <?php } ?>
   

</body>
</html>