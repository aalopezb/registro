<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Usuario</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
    <h2>Hola</h2> 
    <p>Inicia tu registro</p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
        
    </div>
    <div class="input-wrapper">
        <input type="email" name="email" placeholder="Email">
       
    </div>
    <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Dirección">
        
    </div>
    <div class="input-wrapper">
        <input type="tel" name="phone" placeholder="Teléfono">
       
    </div>
    <div class="input-wrapper">
        <input type="password" name="password" placeholder="Contraseña">
      
    </div>
    <input class="btn" type="submit" name="register" value="Enviar">
</form>
<?php
include("registrar.php");
?>
</body>
</html>

