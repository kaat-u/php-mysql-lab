<?php
include("conexion.php");
$id = $_SESSION["id"];
?>
<h2>Bienvenido Cliente</h2>
<form action="guardar_ticket.php" method="POST">
    Titulo
    <input type="text" name="titulo">
    <br><br>
    Descripción
    <textarea name="descripcion"></textarea>
    <br><br>
    <input type="submit" value="Crear Ticket">
</form>
<hr>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Estado</th>
        <th>Respuesta</th>
    </tr>
    <?php
     $sql="SELECT * from tickets
     WHERE id_cliente=$id";
     $r=mysqli_query($cn,$sql);
     while($fila=mysqli_fetch_array($r))
        {
        ?>
        <tr>
            <td><?=$fila["id"]?></td>
            <td><?=$fila["titulo"]?></td>
            <td><?=$fila["estado"]?></td>
            <td><?=$fila["respuesta"]?></td>
        </tr>
        <?php } ?>
</table>