<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
</head>
<body>
    <h2>Suma de dos números</h2>
    
    <!-- Formulario para ingresar los números -->
    <form method="post" action="">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Sumar">
    </form>

    <?php
    // Validamos si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $suma = $num1 + $num2;

        echo "<h3>El resultado de la suma es: $suma</h3>";
    }
    ?>
</body>
</html>
