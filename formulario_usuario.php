<?php
// Iniciar sesión
session_start();

// Conexión a la base de datos
include 'conexion.php';  // Incluye tu archivo de conexión a la base de datos

// Verificar si el usuario está autenticado (esto depende de cómo manejes la autenticación)
if (isset($_SESSION['usuario_id'])) {
    $id_usuario = $_SESSION['usuario_id'];

    // Consultar los datos del usuario
    $query = "SELECT * FROM usuarios WHERE id = $id_usuario";
    $resultado = $conexion->query($query);

    // Verificar si el usuario existe
    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
    } else {
        echo "Usuario no encontrado.";
        exit;
    }
} else {
    echo "No estás autenticado.";
    exit;
}
?>

<!-- Formulario para mostrar y editar los datos del usuario -->
<div class="formulario">
    <h3>Datos de Usuario</h3>
    <form action="action.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>" required>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="masculino" <?php echo ($usuario['genero'] == 'masculino') ? 'selected' : ''; ?>>Masculino</option>
            <option value="femenino" <?php echo ($usuario['genero'] == 'femenino') ? 'selected' : ''; ?>>Femenino</option>
            <option value="otro" <?php echo ($usuario['genero'] == 'otro') ? 'selected' : ''; ?>>Otro</option>
        </select>

        <label for="tipo">Tipo de Suscripción:</label>
        <select id="tipo" name="tipo" required>
            <option value="gratis" <?php echo ($usuario['tipo'] == 'gratis') ? 'selected' : ''; ?>>Gratis</option>
            <option value="premium" <?php echo ($usuario['tipo'] == 'premium') ? 'selected' : ''; ?>>Premium</option>
            <option value="vip" <?php echo ($usuario['tipo'] == 'vip') ? 'selected' : ''; ?>>VIP</option>
        </select>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?php echo $usuario['edad']; ?>" required>

        <button type="submit">Actualizar Datos</button>
    </form>
</div>
