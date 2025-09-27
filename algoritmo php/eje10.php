<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1> Calcular el factorial de un número</h1>
    <form method="post">
        <label>Ingrese un número:
            <input type="number" name="n" required>
        </label>
        <button type="submit">Calcular</button>
    </form>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);
        $f = 1;
        for ($i = 1; $i <= $n; $i++) {
            $f *= $i;
        }
        echo "<p>El factorial de $n es: <strong>$f</strong></p>";
    }
    ?>
</body>
</html>