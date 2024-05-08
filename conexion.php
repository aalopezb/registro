<?php
 
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$db = $_ENV['DB_NAME'];
 
$conexion = mysqli_connect($host, $user, $password, $db);
 
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}