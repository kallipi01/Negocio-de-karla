<?php
// Inicializar el color
$colorFondo = 'white';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el color seleccionado
    $colorFondo = htmlspecialchars($_POST['color']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Color de Fondo</title>
    <style>
        body {
            background-color: <?php echo $colorFondo; ?>;
            transition: background-color 0.5s;
        }
    </style>
</head>
<body>

    <h1>Selecciona un Color de Fondo</h1>
    <form method="POST" action="">
        <label for="color">Elige un color:</label>
        <select id="color" name="color">
            <option value="white">Blanco</option>
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
        </select>
        <input type="submit" value="Cambiar Color">
    </form>

    <script>
        // Alerta cuando se cambia el color
        document.querySelector('form').onsubmit = function() {
            alert("El color de fondo ha cambiado a " + document.getElementById('color').value);
        };
    </script>

</body>
</html>
