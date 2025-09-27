<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mostrar todos los numero pares del 1 al n</h1>
    <form method="post">
        <input type="number" name="num" required>
        <input type="submit" value="Mostrar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = intval($_POST['num']);
        echo "<h2> numero pares del 1 a 20</h2>";
        if($num < 2) {
            echo "No hay numeros pares en este rango.";
            exit;
        }
        // Este for nos permite hacer el bucle de los pares
        for ($i = $num; $i <= $num + 100; $i += 2) {
            echo "$i <br>";
        }
    }

    ?>
</body>
</html>