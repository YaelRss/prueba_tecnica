<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['correo'] = $_POST['correo'];
    $_SESSION['genero'] = $_POST['genero'];
    setcookie("usuario_juguete", $_POST['nombre'], time() + 3600, "/");
}
