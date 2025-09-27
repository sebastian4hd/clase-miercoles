<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular la tabla de multiplicar de un numero</h1>
    <form method="post">
        <input type="number" name="num1" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num1 = $_POST['num1'];
        echo "<h2>El numero es: $num1</h2>";
        for($i=1; $i<=10; $i++) {
            $resultado = $num1 * $i;
            echo "<h3>El resultado es: $resultado</h3>";
        }
    }

    ?>
</body>
</html>