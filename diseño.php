<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="diseño.css">
</head>
<body>
    <h1> Tenemos muchos diseños para ti</h1>
<div class="row">
    <div class="column">
    <img src="fotos/1.jpg" width="150" alt="foto 1"><br>
    <img src="fotos/2.jpg" width="100" height="200" alt="foto 2"><br>
</div>
<div class="column">
    <img src="fotos/3.jpg" width="100" alt="foto 3"><br>
    <img src="fotos/4.jpg" width="100" alt="foto 4"><br>
    </div>
    <div class="column">
    <img src="fotos/5.jpg" width="100" alt="foto 5"><br>
    <img src="fotos/6.jpg" width="100" alt="foto 6"><br>
    </div>
    <div class="column">
    <img src="fotos/7.jpg" width="100" alt="foto 7"><br>
    <img src="fotos/8.jpg" width="100" alt="foto 8"><br>
    </div></br>

   
        <div class="container">
        <h2>Agenda tu cita</h2>
        <form action="procesarfecha.php" method="POST">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
            <input type="submit" value="Enviar"><br></br>
            <div class="username">
                <label for="email">Usuario:</label><br>
                <input type="text" id="email" name="email" required>
                <div id="emailError" class="error">
            </div><br> </br>
            <a href="servicio.php">Regresa al menú anterior </a>
    </form>
</div>



    
</body>
</html>