<?php
$servername = "localhost";
$username = "root";
$password = "JG@jJ5gt59r1";
$dbname = "database_heladeria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "";
}

?>
