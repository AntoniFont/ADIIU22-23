<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2</title>
    <link rel="stylesheet" src="./style.css">
</head>
<body>
    <h1>PHP 2</h1>
    <h1>Bienvenido</h1>
    <p>Ejercicio: Conectar con una base de datos y leer un registro</p>
    <?php
        $conection = mysqli_connect("localhost","root",""); 
        if(!$conection){
            echo "<p>No se pudo conectar</p>";
        }
    ?>
</body>
</html>