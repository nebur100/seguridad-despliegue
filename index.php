<?php
$host = 'db';
$user = 'root';
$pass = getenv('ROOT_PASSWORD');

// Reintento de conexión (espera a MariaDB)
mysqli_report(MYSQLI_REPORT_OFF);
$max_attempts = 5;
$attempts = 0;

while ($attempts < $max_attempts) {
    $conn = @new mysqli($host, $user, $pass);
    if (!$conn->connect_error) {
        break;
    }
    $attempts++;
    sleep(2);
}

if ($conn->connect_error) {
    die("Error de conexión tras varios intentos: " . $conn->connect_error);
}

echo "<h1>¡Despliegue automático de Rubén Moreno Riera funcionando al 100%!</h1>";
echo "<p>Conexión a la base de datos establecida con éxito.</p>";
?>
