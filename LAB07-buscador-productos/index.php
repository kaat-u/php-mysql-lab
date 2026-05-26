<?php
    require 'conexion.php';
    $producto= $_GET['producto']??'';
    //Variable que me permite cargar todos los productos de la BD
    $sql ="select * from productos where 1=1 ";
    $params =[];
    if(!empty($producto)) {
        $sql .= " AND nombre LIKE :producto";
        $params[':producto'] = "%$producto%";

    }
    $stmt = $pdo->prepare($sql);
    $stmt -> execute($params);
    $productos =$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Productos</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="contenedor"> 

    <h1>Buscar Productos</h1> 
 
    <form method="GET" class="formulario"> 
 
        <input  
            type="text" 
            name="producto" 
            placeholder="Ingrese producto" 
            value="" 
        > 
 
        <input  
            type="number" 
            name="precio" 
            placeholder="Precio máximo" 
            value="" 
        > 
 
        <button type="submit">Buscar</button> 
 
    </form> 
 
    <table> 
 
        <thead> 
            <tr> 
                <th>ID</th> 
                <th>Producto</th> 
                <th>Precio</th> 
            </tr> 
        </thead>
      <tbody>
         <?php if(count($productos)>0):?>
            <?php foreach($productos as $item):?>
                <tr>
                    <td><?=$item['id']?></td>
                    <td><?=$item['nombre']?></td>
                    <td>S/.<?=number_format($item['precio'],2)?></td>
                </tr>   
            <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td colspan="3">     
                        No se Encontraron Productos
                    </td>
                </tr>       
            <?php endif;?>    
      </tbody>    
    </table>    
    </div>
</body>
</html>