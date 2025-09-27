<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Serie Fibonacci</h1>
    <form method="post">
        <label>Ingrese la cantidad de términos:
            <input type="number" name="n" required>
        </label>
        <button type="submit">Generar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);
        $a = 0;
        $b = 1;
        $serie = [];

        for ($i=0; $i<$n; $i++) {
            $serie[] = $a;
            $suma = $a + $b;
            $a = $b;
            $b = $suma;
        }

        echo "<p>Serie Fibonacci: <strong>" . implode(", ", $serie) . "</strong></p>";
    }
    ?>
</body>
</html>
