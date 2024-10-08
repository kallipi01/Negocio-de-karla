<?php
// Iniciar sesión para almacenar el nombre
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Almacenar el nombre en la sesión
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
    echo "<script>document.location.href='';</script>"; // Redirigir a la misma página
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <script>
        function mostrarSaludo() {
            const nombre = "<?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : ''; ?>";
            if (nombre) {
                alert("¡Hola, " + nombre + "!");
            }
        }
    </script>
</head>
<body onload="mostrarSaludo()">

    <h1>Formulario de Saludo</h1>
    <form method="POST" action="">
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Saludar">
    </form>

    <?php
    // Mostrar el saludo en la página si el nombre está en la sesión
    if (isset($_SESSION['nombre'])) {
        echo "<h2>¡Bienvenido, " . $_SESSION['nombre'] . "!</h2>";
    }
    ?>

</body>
</html>
