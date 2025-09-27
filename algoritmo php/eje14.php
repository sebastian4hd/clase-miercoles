<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora básica</h1>
    <form method="post">
        <label>Ingrese el primer número:
            <input type="number" step="any" name="a" required>
        </label><br><br>
        <label>Ingrese el segundo número:
            <input type="number" step="any" name="b" required>
        </label><br><br>
        <label>Seleccione la operación:
            <select name="op">
                <option value="+">Suma</option>
                <option value="-">Resta</option>
                <option value="*">Multiplicación</option>
                <option value="/">División</option>
            </select>
        </label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        $op = $_POST["op"];

        switch ($op) {
            case "+": $resultado = $a + $b; break;
            case "-": $resultado = $a - $b; break;
            case "*": $resultado = $a * $b; break;
            case "/": $resultado = ($b != 0) ? $a / $b : "Error: división por 0"; break;
        }

        echo "<p>El resultado es: <strong>$resultado</strong></p>";
    }
    ?>
</body>
</html>
