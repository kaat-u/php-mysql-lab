<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
//Autenticacion en dos pasos
$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    $mail->Username = "elprofesor@gmail.com";
    $mail->Password = "";

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;


    $mail->SMTPDebug = 2; // ver detalles de conexión


    $mail->setFrom(
        "elprofesor@gmail.com",
        "Curso Python IA"
    );


    $mail->addAddress(
        "elprofesor@gmail.com"
    );


    $mail->Subject = "Nuevo interesado Curso Python IA";


    $mail->Body = "
    Nuevo registro:

    Nombre:
    ".$_POST['nombre']."

    Correo:
    ".$_POST['correo']."

    Telefono:
    ".$_POST['telefono'];


    $mail->send();

    echo "Correo enviado correctamente";


} catch(Exception $e){

    echo "Error: ".$mail->ErrorInfo;

}

?>