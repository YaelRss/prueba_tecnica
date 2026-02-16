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
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Juguetes</title>
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
            font-size: 18px;
        }
        .grid { 
            display: flex; 
            justify-content: center; 
            gap: 20px; 
            flex-wrap: wrap; 
            margin-top: 30px; 
        }
        .card { 
            background: white; 
            border: 2px solid black; 
            padding: 20px; 
            width: 220px; 
            border-radius: 8px; 
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1); 
        }
        .precio { 
            color: green; 
            font-weight: bold; 
            font-size: 1.2em; 
        }
        .btn { 
            display: block; 
            background: #5297f1; 
            color: white; 
            text-decoration: none; 
            padding: 10px; 
            margin-top: 10px; 
            border-radius: 5px; 
            border: 1px solid black;
            transition: 0.3s;
        }
        .btn:hover { 
            background-color: green; 
            color: black; 
        }
    </style>
</head>
<body>
    <h1>Hola <span style="color:white"><?php echo htmlspecialchars($nombre); ?></span>, estos son los juguetes para ti:</h1>
    
    <div class="grid">
        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="' . htmlspecialchars($row["imagen"]) . '" style="width:100%; height:150px; object-fit:contain; border-radius:8px; display:block; margin:0 auto;">';
                echo '<h3>' . htmlspecialchars($row["nombre"]) . '</h3>';
                echo '<p class="precio">$' . number_format($row["precio"], 2) . '</p>';
                echo '<a href="envio.php?juguete=' . urlencode($row["nombre"]) . '&precio=' . urlencode($row["precio"]) . '" class="btn" style="text-align:center;">Enviar</a>';
                echo '</div>';
            }
        } else {
            echo "<p>No se encontraron juguetes en la base de datos.</p>";
        }
        ?>
    </div>
    <br>
    <hr width="50%">
    <a href="index.php" style="text-decoration:none; color:white; font-size:20px;">Volver al inicio</a>
</body>
</html>
