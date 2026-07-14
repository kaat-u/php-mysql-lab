<?php
include("conexion.php");
$idSoporte = $_SESSION["id"];
?>
<h2>Panel de Soporte</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Titulo</th>
        <th>Estado</th>
        <th>Respuesta</th>
        <th>Acción</th>
    </tr>
    <?php
    $sql = "SELECT tickets.*,
        usuarios.nombre
        FROM tickets
        INNER JOIN usuarios
        ON usuarios.id=tickets.id_cliente";

    $r = mysqli_query($cn, $sql);
    while ($f = mysqli_fetch_assoc($r)) {
        ?>
        <tr>
            <form action="actualizar_ticket.php" method="POST">
                <td><?= $f["id"] ?></td>
                <td><?= $f["nombre"] ?></td>
                <td><?= $f["titulo"] ?></td>
                <td>
                    <select name="estado">
                        <option <?= $f["estado"] == "Pendiente" ? "selected" : "" ?>>
                            Pendiente
                        </option>
                        <option <?= $f["estado"] == "En Proceso" ? "selected" : "" ?>>
                            En Proceso
                        </option>
                        <option <?= $f["estado"] == "Resuelto" ? "selected" : "" ?>>
                            Resuelto
                        </option>
                    </select>
                </td>
                <td>
                    <input type="text" name="respuesta" value="<?= $f["respuesta"] ?>">
                </td>
                <td>

                    <input type="hidden" name="id" value="<?= $f["id"] ?>">

                    <input type="submit" value="Guardar">
                </td>
            </form>
        </tr>
        <?php
    }
    ?>
</table>