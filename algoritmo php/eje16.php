<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form method="post">
        <label>Peso (kg):
            <input type="number" step="any" name="peso" required>
        </label><br><br>
        <label>Altura (m):
            <input type="number" step="any" name="altura" required>
        </label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p>Tu IMC es: <strong>" . round($imc,2) . "</strong></p>";
        } else {
            echo "<p>Error: la altura debe ser mayor a 0.</p>";
        }
    }
    ?>
</body>
</html>
