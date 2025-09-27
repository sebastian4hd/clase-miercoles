<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area de un triangulo</h1>
    <form  method="post">
       <input type="number" name="base" placeholder="base" required>
       <input type="number" name="altura" placeholder="altura" required>
       <button type="submit">Calcular</button> 
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        echo "<h2>El area del triangulo es:$area</h2>";
    }

    ?>
</body>
</html>