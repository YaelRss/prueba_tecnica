<?php
session_start();
if (isset($_GET['juguete']) && isset($_SESSION['correo'])) {
    $para = $_SESSION['correo'];
    $juguete = $_GET['juguete'];
    $precio = $_GET['precio'];
    
    $mensaje = "Se ha enviado la información del <strong>$juguete</strong> (Precio: $$precio) al correo: <strong>$para</strong>";
} else {
    $mensaje = "Hubo un error con los datos";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Envío de Correo</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            padding-top: 50px; 
            background: linear-gradient(135deg, #2529ff88 0%, #0000007c 50%, #cc1ae486 100%);
            margin: 0;
            min-height: 100vh;
        }
        div { 
            border: 2px solid green; 
            padding: 20px; 
            display: inline-block; 
            border-radius: 10px;
            background-color: white;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #5297f1;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: green;
        }
    </style>
<body style="font-family: sans-serif; text-align: center; padding-top: 50px;">
    <div style="border: 2px solid green; padding: 20px; display: inline-block; border-radius: 10px;">
        <h3>Se ha enviado el correo</h3>
        <p><?php echo $mensaje; ?></p>
        <a href="catalogo.php">Volver al catálogo</a>
    </div>
</body>
</html>