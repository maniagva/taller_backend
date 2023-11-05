<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="punto1.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" step="any" id="numero1" name="numero1" required>

        <label for="numero2">Número 2:</label>
        <input type="number" step="any" id="numero2" name="numero2" required>

        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <button type="submit" name="calcular" class="btn">Calcular</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['calcular'])) {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];
    $resultado = 0;

    switch ($operacion) {
        case "suma":
            $resultado = $numero1 + $numero2;
            break;
        case "resta":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                echo "No se puede dividir por cero.";
                exit();
            }
            break;
        default:
            echo "Operación no válida.";
            exit();
    }

    echo '<h2>El resultado de la operación es: ' . $resultado . '</h2>';
}
?>