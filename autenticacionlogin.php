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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errores = [];

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email ingresado no es válido.";
    }

    
    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $password)) {
        $errores[] = "La contraseña debe ser alfanumérica y tener al menos 6 caracteres.";
    }

    if (empty($errores)) {
        
        $consulta = "SELECT password FROM usuarios WHERE email = ?";
        $stmt = mysqli_prepare($enlace, $consulta);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $passwordHash);
            mysqli_stmt_fetch($stmt);

            
            if (password_verify($password, $passwordHash)) {
                
                header("Location: inicio.php");
                exit();
            } else {
                $errores[] = "Contraseña incorrecta.";
            }
        } else {
            $errores[] = "No se encontró una cuenta con ese email.";
        }

        mysqli_stmt_close($stmt);
    }

    
    foreach ($errores as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}

mysqli_close($enlace);
?>

<?php

session_start();
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "spapaulamedina";


$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $consulta = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $resultado = mysqli_query($enlace, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['email'] = $email;  
        header("Location: agendarcita.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}

mysqli_close($enlace);
?>
