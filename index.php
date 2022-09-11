<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/loginc.css">
</head>
<?php
if(isset($_GET['error'])){
   $error = $_GET['error'];
   if($error == "Incorrecto"){
   echo "<h2><br>Usuario o Contraseña incorrecto</h2>";
   }
   if($error == "Vacio"){
    echo "<h2><br>Los datos enviados se encuentran vacios</h2>";
   }
}
?>
<body>
    <h2><br><br>Iniciar Sesion:</h2>
    <form action="procesar.php" method="POST">
    
    <p><label for="nickname"><h2>Usuario:</h2></label>
    <input type="text" name="nickname"></p>

    <p><label for="password"><h2><br>Contraseña:</h2></label>
    <input type="text" name="password"></p>

    <p><input type="submit" value="Acceder"></p>
    </form>
</body>
</html>