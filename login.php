<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Nails Paula Medina</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="autenticacionlogin.php" method="post">
        <img src="fotos/logo nails.png" width="150" height="100">
        <div class="formulario">
            <h2>Inicio de sesión</h2>
            <div class="username">
                <label for="email">Usuario:</label><br><br>
                <input type="text" id="email" name="email" required>
                <div id="emailError" class="error"></div>
            </div>
            <div class="password">
                <label for="password">Contraseña:</label><br><br>
                <input type="password" id="password" name="password" required>
                <div id="passwordError" class="error"></div>
            </div>
            <input type="submit" name="Iniciar" value="Iniciar">
            <input type="reset" id="resetButton" value="Reset"><br><br>
            <div class="recordar">¿Olvidó su contraseña?</div><br><br>
        
    </form><br><br>
    <form action="login.php" method="post">
        <div class="Registrarse">
            <a href="index.php">Regístrate aquí</a>
        </div>
    </form>

    <script>
        document.getElementById('resetButton').addEventListener('click', function(event) {
            event.preventDefault(); 
            window.location.href = 'login.php'; 
        });

        document.querySelector('form').addEventListener('submit', function(event) {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let emailError = document.getElementById('emailError');
            let passwordError = document.getElementById('passwordError');
            let valid = true;

            
            emailError.textContent = '';
            if (!/\S+@\S+\.\S+/.test(email)) {
                emailError.textContent = 'Por favor ingrese un email válido.';
                valid = false;
            }

            
            passwordError.textContent = '';
            if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/.test(password)) {
                passwordError.textContent = 'La contraseña debe ser alfanumérica y tener al menos 6 caracteres.';
                valid = false;
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>