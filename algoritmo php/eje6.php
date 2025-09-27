<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Determinar numero mayor</h1>
    <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <input type="number" name="num3" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $mayor = $num1;
        if($num2 > $mayor) {
            $mayor = $num2;
        }
        if($num3 > $mayor) {
            $mayor = $num3;
        }
        echo "<h2>El numero mayor es: $mayor</h2>";
    }

    ?>
</body>
</html>