<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "spapaulamedina";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $insertarDatos = "INSERT INTO usuarios (nombre,email, password) VALUES ('$nombre','$email', '$password')";

    if (mysqli_query($enlace, $insertarDatos)) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $insertarDatos . "<br>" . mysqli_error($enlace);
    }
}

mysqli_close($enlace);
?>

