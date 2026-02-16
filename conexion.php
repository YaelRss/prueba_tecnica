<?php
$host = "localhost"; 
$user = "root";

// MAMP (MAC): 
$pass = "root";
$port = "8889";

/* XAMPP (WINDOWS/MAC), CAMBIAR A:
$pass = ""; (aqui va vacio)
$port = "3306";
*/

$db = "jugueteria";

$conn = new mysqli($host . ":" . $port, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>