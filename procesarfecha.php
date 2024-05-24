<?php
session_start();


if (!isset($_SESSION['email'])) {
    die("Acceso denegado. Por favor inicie sesión.");
}


$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "spapaulamedina";


$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha = $_POST['fecha'];
    $cliente_email = $_SESSION['email'];

    
    $insertarDatos = "INSERT INTO citas (fecha, email) VALUES ('$fecha', '$cliente_email')";

    if (mysqli_query($enlace, $insertarDatos)) {
        
        $to = $cliente_email;
        $subject = "Confirmación de Cita";
        $message = "Su cita ha sido agendada para el " . $fecha . ". Gracias por elegirnos!";
        $headers = "From: no-reply@spapaulamedina.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Registro exitoso y correo enviado!";
        } else {
            echo "Registro exitoso, pero falló el envío del correo.";
        }
    } else {
        echo "Error: " . $insertarDatos . "<br>" . mysqli_error($enlace);
    }
}


mysqli_close($enlace);
?>