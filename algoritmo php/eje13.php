<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Invertir una cadena</h1>
    <form method="post">
        <label>Ingrese un texto:
            <input type="text" name="cadena" required>
        </label>
        <button type="submit">Invertir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];
        $invertida = strrev($cadena);
        echo "<p>La cadena invertida de '<strong>$cadena</strong>' es: <strong>$invertida</strong></p>";
    }
    ?>
</body>
</html>
