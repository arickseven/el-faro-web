<?php
// action.php

include 'modelo.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $genero = $_POST['genero'];
    $tipo = $_POST['tipo'];
    $edad = $_POST['edad'];

    // Crear una instancia de la clase modelo
    $usuario = new Modelo($nombre, $correo, $genero, $tipo, $edad);

    // Procesar los datos (puedes mostrar los datos o hacer algo con ellos)
    $datos = $usuario->procesarDatos();

    //verificar si datos tiene valores antes de intentar a usarlos
    if ($datos && isset($datos['nombre'])) {
        echo "Nombre: " . $datos['nombre'];
    } else {
        echo "No se pudieron procesar los datos.";
    }

    // Mostrar los datos procesados
    echo "Datos procesados: <br>";
    echo "Nombre: " . $datos['nombre'] . "<br>";
    echo "Correo: " . $datos['correo'] . "<br>";
    echo "Género: " . $datos['genero'] . "<br>";
    echo "Tipo de Suscripción: " . $datos['tipo'] . "<br>";
    echo "Edad: " . $datos['edad'] . "<br>";
    } else {
        echo "No se pudieron Procesar los Datos.";
    }

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }
        .bienvenida {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .imagen-bienvenida {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="bienvenida">
        <h2>¡Bienvenido, <?php echo $nombre; ?>!</h2>
        <p>Gracias por suscribirte. Hemos recibido tus datos y tu suscripción es:</p>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Correo:</strong> <?php echo $correo; ?></p>
        <p><strong>Género:</strong> <?php echo $genero; ?></p>
        <p><strong>Tipo de Suscripción:</strong> <?php echo $tipo; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>

        <p>¡Estamos emocionados de tenerte con nosotros!</p>

        <!-- Imagen agradable -->
        <img class="imagen-bienvenida" src="https://img.freepik.com/vector-gratis/letras-bienvenida-coloridas-estandarte-moderno-invitacion_1017-50216.jpg?semt=ais_hybrid&w=740" alt="Imagen bienvenida">


    </div>

</body>
</html>



