<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Promedio de notas ingresadas por el usuario</h1>
    <form method="post">
        <input type="number" name="num1" step="0.1" required>
        <input type="number" name="num2" step="0.1" required>
        <input type="number" name="num3" step="0.1" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $promedio = ($num1 + $num2 * $num3) / 3;
        echo "<h2>El promedio es: $promedio</h2>";
    }

    ?>
</body>
</html>