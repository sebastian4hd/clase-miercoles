<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numero primo</h1>
    <form  method="post">
        <input type="number" name="num" required>
        <input type="submit" value="Verificar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['num'];
        $primo = true;
        if($num <= 1) {
            $primo = false;
        }else {
            for($i=2; $i <= sqrt($num); $i++) {
                if($num % $i == 0) {
                    $primo = false;
                    break;
                }
            }
        }
        if($primo) {
            echo "<h2>$num es un numero primo</h2>";
        } else {
            echo "<h2>$num no es un numero primo</h2>";
        }
    }

    ?>
</body>
</html>