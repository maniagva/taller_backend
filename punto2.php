<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="punto2.php" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit" name="validar" class="btn">Verificar</button>
    </form>
</body>

</html>

<?php
if (isset($_POST["validar"])) {
    $edad = $_POST["edad"];

    if ($edad >= 0 && $edad <= 100) {
        if ($edad >= 18) {
            echo "<h2>Es mayor de edad.</h2>";
        } else {
            echo "<h2>Es menor de edad.</h2>";
        }
    } else {
        echo "<h2>El valor ingresado es incorrecto</h2>";
    }
}
?>