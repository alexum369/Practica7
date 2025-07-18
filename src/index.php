<?php
$host = 'db';
$user = 'root';
$password = 'password';
$database = 'testdb';

// Conectar a MySQL
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Conexión fallida: " . $conn->connect_error);
}
echo "✅ Conexión exitosa a la base de datos MySQL.<br>";
echo "👋 ¡Hola Mundo desde PHP!";
?>
