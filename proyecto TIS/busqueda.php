
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

$con = mysqli_connect('localhost','root','','empresa') or die ("Error en la conexión al servidor");

$sql = "SELECT `nombre`, `apellido_pa`, `apellido_ma`, `mail`, `rut` FROM `usuario` WHERE rut =$_POST["rut"];

$resultado = mysqli_query($con,$sql) or die ('Error en el ingreso de los datos a la base de datos');

mysqli_close($con);

header("location: resultado.html");
?>