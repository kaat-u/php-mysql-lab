<?php
    include("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBO (Maestro Detalle)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contenedor">
        
    <h1 class="titulo-principal">TIENDAS TAMBO</h1>
    
    <!-- BUSCADOR -->
    <div class="cuadros">
        <h2 class="titulo">Buscar Pedido</h2>
        <form method="GET" action="index.php">
            <label class="texto2">Número de pedido:</label>
            <input type="text" name="buscar_id" placeholder="Ingrese el N° de pedido">
                <button type="submit" class="btn">
                    BUSCAR
                </button>
        </form>
    </div>
     
    <?php
    if(isset($_GET['buscar_id'])){
        $buscar_id = $_GET['buscar_id'];
        $sqlBuscar = "SELECT * FROM pedido WHERE id = '$buscar_id'";
        $resultadoBuscar = $conexion->query($sqlBuscar);
        $pedidoEncontrado = $resultadoBuscar->fetch_assoc();
        if($pedidoEncontrado){
    ?>

    <div class="cuadros detalle">
        <h2 class="titulo">PEDIDO ENCONTRADO</h2>
        <table>
            <tr>
                <th>N° DE PEDIDO</th>
                <th>FECHA</th>
                <th>CLIENTE</th>
            </tr>
            <tr>
                <td>
                    <?php echo $pedidoEncontrado['id']; ?>
                </td>
                <td>
                    <?php echo $pedidoEncontrado['fecha']; ?>
                </td>
                <td>
                    <?php echo $pedidoEncontrado['cliente']; ?>
                </td>
            </tr>
        </table>
    </div>



    <!-- DETALLE DEL PEDIDO -->
    <div class="cuadros detalle">
        <h2 class="titulo">DETALLE DEL PEDIDO</h2>
        <table>
            <tr>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>SUBTOTAL</th>
            </tr>
            <?php
            $total = 0;
            $sqlDetalle = "SELECT * FROM detalle_pedido WHERE pedido_id = '$buscar_id'";
            $resultadoDetalle = $conexion->query($sqlDetalle);
            while($detalle = $resultadoDetalle->fetch_assoc()){
                $total += $detalle['subtotal'];
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
            
            <tr>
                <td class="total" colspan="3">TOTAL:</td>
                <td><?php echo $total; ?></td>
            </tr>
        </table>
    </div>

    <?php
        }
    }
    ?>

</div>
</body>
</html>