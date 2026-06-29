<?php
    include("conexion.php");
    $sql="SELECT * FROM CURSOS where estado=1";
    $resultado=$conexion->query($sql);
    $curso=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $curso['titulo'];?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<section class="hero text-center">
    <h1 class="display-3">
     <?php echo $curso['titulo'];?>
    </h1>
    <p class="fs-4">
        <?php echo $curso['descripcion'];?>
    </p>
    <a href="#registro" class="btn btn-primary btn-lg">
        Inscribirme ahora
    </a>
</section>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-4">
    <div class="card p-4">
    <h3> Horario</h3>
    <p>
        <?php echo $curso['horario'];?>
    </p>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card p-4">
    <h3>Duración</h3>
    <p>
    <?php echo $curso['duracion'];?>
    </p>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card p-4">
    <h3> Modalidad</h3>
    <p>
    <?php echo $curso['modalidad'];?>
    </p>
    </div>
    </div>
    </div>
    </div>
    <section id="registro" class="container mt-5 mb-5">
    <h2 class="text-center">
     Reserva tu cupo
    </h2>
    <form action="registrar.php" method="POST">
        <input class="form-control mb-3"
        name="nombre" placeholder="Nombre completo" required>
        <input class="form-control mb-3" name="correo" placeholder="Correo Gmail" required>
        <input class="form-control mb-3"name="telefono" placeholder="Celular" required>
        <button class="btn btn-primary w-100"> Quiero información</button>
    </form>
</section>
</body>
</html>
    
