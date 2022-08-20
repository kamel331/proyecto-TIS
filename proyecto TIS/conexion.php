<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "empresa";
$conexion = new mysqli($host,$user,$pass,$db);
if($conexion->connect_errno){
    echo "No hay conexion a la base de datos";
    exit();
}
?>