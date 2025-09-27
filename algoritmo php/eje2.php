<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Par o Impar</h1>
        <input type="number" name="num1" required>
        <button type="submit">calcular</button>
    </form>
    <?php
    if($_SERVER ['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        if($num1 % 2 == 0) {
            echo "<h2>El numero es par</h2>";
        } else {
            echo "<h2>El numero es impar</h2>";
        }
    }




    ?>
</body>
</html>