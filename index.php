<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            padding-top: 50px; 
            background: linear-gradient(135deg, #182bf9 0%, #7c1fc8 50%, #eb13b9 100%);
            margin: 0;
            min-height: 100vh;
            font-size: 18px;
        }
        form { 
            background: white; 
            padding: 30px; 
            border: 2px solid black; 
            border-radius: 10px; 
            width: 300px; 
            box-shadow: 0 20px 36px rgba(0, 0, 0, 0.8);
        }
        input, select, button { 
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            box-sizing: border-box;
            border-radius: 20px;
            font-size: 16px;
        }
        button { 
            background: #5297f1; 
            color: white; 
            border: 1px solid black; 
            cursor: pointer; 
            font-size: 18px; 
            transition: 0.3s;
        }
        button:hover { 
            background: green; 
            color: black; 
        }
        #saludo-dinamico {
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 10px;
            height: 40px;
            font-size: 24px;
        }
        label {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div id="saludo-dinamico"></div>

    <form action="catalogo.php" method="POST">
        <h2 style="text-align:center">Ingresa tus datos</h2>
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <label>Correo:</label>
        <input type="email" name="correo" required>
        
        <label>Género:</label>
        <select name="genero">
            <option value="niño">Niño</option>
            <option value="niña">Niña</option>
        </select>
        
        <button type="submit">Enviar</button>
    </form>

    <script>
        const inputNombre = document.querySelector('#nombre');
        const saludo = document.querySelector('#saludo-dinamico');

        inputNombre.addEventListener('input', (e) => {
            saludo.textContent = e.target.value ? `¡Bienvenido, ${e.target.value}! ` : '';
        });
    </script>
</body>
</html>