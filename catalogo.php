<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['correo'] = $_POST['correo'];
    $_SESSION['genero'] = $_POST['genero'];
    setcookie("usuario_juguete", $_POST['nombre'], time() + 3600, "/");
}

if (!isset($_SESSION['nombre'])) {
    header("Location: index.php");
    exit();
}

$nombre = $_SESSION['nombre'];
$genero = $_SESSION['genero'];

$sql = "SELECT * FROM juguetes WHERE genero = '$genero' OR genero = 'ambos'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
