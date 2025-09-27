<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Contar vocales en una cadena</h1>
    <form method="post">
        <label>Ingrese un texto:
            <input type="text" name="cadena" required>
        </label>
        <button type="submit">Contar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = strtolower($_POST["cadena"]);
        preg_match_all('/[aeiouáéíóú]/u', $cadena, $vocales);
        $cantidad = count($vocales[0]);
        echo "<p>La cadena '<strong>{$_POST['cadena']}</strong>' tiene <strong>$cantidad</strong> vocales.</p>";
    }
    ?>
</body>
</html>
