<?php

$conexion = new mysqli("localhost","root","","sistema");
$usuario = "ArmandoRuiz";
//La funcion password_hash encriptar cadenas de datos
$password = password_hash("78910",PASSWORD_DEFAULT);

$sql= "INSERT INTO usuarios(usuario,password)
       VALUES('$usuario','$password')";  

if ($conexion ->query($sql)) {
     echo "Usuario Creado";
}else {
    echo "ERROR";
}
