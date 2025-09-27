<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el area y perimetro de un circulo</h1>
    <form method="post">
        <input type="number" step="0.01" name="radio" id="radio" placeholder="radio" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $radio = $_POST['radio'];
        $area = M_PI * pow($radio, 2);
        $perimetro = 2 * M_PI * $radio;
        echo "<h2>El area de un circulo es: $area</h2>";
        echo "<h2>El perimetro de un circulo es:$perimetro</h2>";
    }

    ?>
</body>
</html>