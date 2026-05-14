<?php
$host = 'db';
$user = 'root';
$pass = getenv('ROOT_PASSWORD');
$db   = 'test_db';

// Intentar conectar
$conn = new mysqli($host, $user, $pass);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "<h1>Despliegue automático de Rubén Moreno Riera funcionando al 100%!</h1>";
echo "<p>Conexión a la base de datos establecida con éxito.</p>";
?>
