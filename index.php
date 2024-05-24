<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="formulario.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrate y vive la magia</title>
</head>
<body>
  
<div class="content">
  <img src="fotos/logo nails.png" width="150" height="100">
  <h2>Registrate y vive la magia!!!</h2>
  <form action="autenticacionregistro.php" method="post">
    <div class="tooltip">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <span class="tooltiptext">Por favor, ingrese su nombre y apellido</span>
    </div><br></br>

    <div class="tooltip">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <span class="tooltiptext">Por favor, ingrese su correo personal</span>
    </div><br></br>

    <div class="tooltip">
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <span class="tooltiptext">Por favor, ingrese una contraseña alfanumérica de al menos 6 caracteres</span>
    </div><br></br>

    <input type="submit" name="Enviar" value="Enviar">
    <input type="reset" value="Limpiar"><br></br>
    <a href="login.php">Regresa al inicio</a>
  </form>
</div>
</body>
</html>