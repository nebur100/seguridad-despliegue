<?php
$host = 'db';
$user = 'root';
$pass = getenv('MARIADB_ROOT_PASSWORD'); // Aquí está el truco
$db   = 'test_db';

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "<h1>¡Despliegue automático de Rubén Moreno Riera funcionando al 100%!</h1>";
echo "<p>Conexión a la base de datos establecida con éxito.</p>";
?>
