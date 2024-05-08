<?php
 
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$db = $_ENV['DB_NAME'];
 
$conex = mysqli_connect($host, $user, $password, $db);
 
if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}