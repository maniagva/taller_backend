<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="punto4.php" method="post">
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha" required>

        <button type="submit" name="calcular" class="btn">Calcular</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['calcular'])) {
    $fecha = $_POST["fecha"];
    $fecha_actual = date('Y-m-d');

    $diff = date_diff(date_create($fecha), date_create($fecha_actual));
    $edad = $diff->format('%y');

    if ($edad < 18) {
        echo "Su edad es $edad por tanto: No es mayor de edad.";
    } else {
        echo "Su edad es $edad por tanto: Es mayor de edad.";
    }
}
?>