<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="respuesta_punto3.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="cedula">Cedula:</label>
        <input type="number" id="cedula" name="cedula" required>

        <button type="submit" name="mostrar" class="btn">Mostrar</button>
    </form>
</body>

</html>