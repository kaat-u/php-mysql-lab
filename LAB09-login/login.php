<?php
 //Crear variables de Sesion
  session_start();
  if (!isset($_SESSION['intentos'])){
    $_SESSION['intentos'] = 0;
  }
  include("conexion.php");
  $mensaje="";
  if (isset($_POST['ingresar'])){
    //Tomar los valores de las variables Paso 2
    $usuario = trim($_POST['usuario']);
    $password = $_POST['password'];
    //Comparar con la Base de datos Paso 3
    $sql= "SELECT * from usuarios WHERE usuario=?";
    $stmt = $conexion->prepare($sql);
    $stmt ->bind_param("s",$usuario);
    $stmt ->execute();
    //Me trae un array con toda la fila de la tabla
    $resultado = $stmt->get_result();
    if ($resultado ->num_rows>0){
        $fila=$resultado->fetch_assoc();
        //Verificamos el Password
        if (password_verify($password,$fila['password'])){
            $_SESSION['usuario'] = $fila['usuario'];
            $_SESSION['intentos'] = 0;
            $mensaje = "
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Bienvenido',
                    text: '{$fila['usuario']}'
                }).then(() => {
                    window.location='index.php';
                });
            </script>";
        } else {
            $_SESSION['intentos']++;
        }

    } else {
        $_SESSION['intentos']++;
    }

    if (!empty($_SESSION['intentos']) && $_SESSION['intentos'] > 0 && empty($mensaje)) {

        if ($_SESSION['intentos'] >= 3) {

            $mensaje = "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Acceso bloqueado',
                    text: 'Has superado los 3 intentos permitidos'
                });
            </script>";

        } else {

            $restantes = 3 - $_SESSION['intentos'];

            $mensaje = "
            <script>
            Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'Usuario o contraseña incorrectos. Intentos restantes: $restantes'
            });
            </script>";
        }
    }
}

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Seguridad</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:50px;
        }
        input{
            padding:8px;
            margin:5px 0;
        }
</style>
</head>
<body>
    <h2>Iniciar Sesion </h2> 
    <?php
        echo $mensaje;
    ?>

    <?php if ($_SESSION['intentos'] < 3) { ?>

<form method="POST">

    <input type="text" name="usuario" placeholder="Usuario" required>
    <br>

    <input type="password" name="password" placeholder="Contraseña" required>
    <br>

    <button type="submit" name="ingresar">
        Ingresar
    </button>

</form>

        <?php } else { ?>

        <h3>Cuenta bloqueada por exceso de intentos.</h3>

        <?php } ?>

    
</body>
</html>