
<?php

$con = mysqli_connect('localhost','root','','empresa') or die ("Error en la conexión al servidor");

$sql = "INSERT INTO usuario VALUES('".$_POST["nombre"]."','".$_POST["apellido_pa"]."','".$_POST["apellido_ma"]."','".$_POST["mail"]."','".$_POST["rut"]."','".$_POST["contrasena"]."')";

$resultado = mysqli_query($con,$sql) or die ('Error en el ingreso de los datos a la base de datos');

mysqli_close($con);

header("location: login.html");
?>
