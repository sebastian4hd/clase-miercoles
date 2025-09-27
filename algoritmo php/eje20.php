<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Validar si un número está en un rango</h1>
    <form method="post">
        <label>Número:
            <input type="number" name="num" required>
        </label><br><br>
        <label>Rango mínimo:
            <input type="number" name="min" required>
        </label><br><br>
        <label>Rango máximo:
            <input type="number" name="max" required>
        </label><br><br>
        <button type="submit">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["num"]);
        $min = intval($_POST["min"]);
        $max = intval($_POST["max"]);

        if ($num >= $min && $num <= $max) {
            echo "<p>El número <strong>$num</strong> está dentro del rango [$min - $max].</p>";
        } else {
            echo "<p>El número <strong>$num</strong> NO está dentro del rango [$min - $max].</p>";
        }
    }
    ?>
</body>
</html>
