<?php
$host = 'db';
$user = 'root';
$pass = getenv('ROOT_PASSWORD'); // Leemos la contraseña de Jenkins [cite: 51]

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "<h1>Conexión exitosa a la base de datos MariaDB</h1>";
echo "<p>Desplegado por: amorrie071</p>"; // Tu usuario [cite: 23]
?>
