<?php
    include("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Maestro-Detalle</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contenedor">
        <h1>SISTEMA MAESTRO DETALLE</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>FECHA</th>
                <th>TOTAL</th>
                <th>ACCION</th>
            </tr>    
            <?php
              $sql = "SELECT * from venta";
              $resultado= $conexion->query($sql);
              while($fila = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['cliente']; ?></td>
                    <td><?php echo $fila['fecha']; ?></td>
                    <td><?php echo $fila['total']; ?></td>
                    <td>
                         <a href="index.php?venta_id=<?php echo $fila['id']; ?>">
                                <button class="btn">
                                    VER DETALLE
                                </button>
                            </a>
                    </td>
                </tr>
                 <?php
                    }
                ?>
                </table>
    </div>    
    <?php
     if(isset($_GET['venta_id'])) {
        $venta_id = $_GET['venta_id'];
     ?>
      <div class="card detalle">

       <h2 class="tituloDetalle"> DETALLE DE VENTA NRO <?php echo $venta_id; ?>    
       <table>
         <tr>
            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>SUBTOTAL</th>
        </tr>    
         <?php
           $sqlDetalle = "SELECT * from DETALLE_VENTA WHERE venta_id ='$venta_id'";
           $resultadoDetalle =$conexion->query($sqlDetalle);
           while ($detalle = $resultadoDetalle ->fetch_assoc()) {
          ?>
          <tr>
             <td>
                <?php echo $detalle['producto']; ?>
             </td>
             <td>
                <?php echo $detalle['cantidad']; ?>
             </td>
             <td>
                 <?php echo $detalle['precio']; ?>
             </td>
             <td>
                 <?php echo $detalle['subtotal']; ?>
             </td>
            </tr>    
             <?php
                 }
             ?>
          </table>
    </div>
    <?php
        }
    ?>
   </div>    
</body>
</html>