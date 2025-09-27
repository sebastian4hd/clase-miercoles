<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> Verificar si es palíndromo</h1>
    <form method="post">
        <label>Ingrese una palabra:
            <input type="text" name="texto" required>
        </label>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = strtolower(str_replace(" ", "", $_POST["texto"]));
        $invertido = strrev($texto);

        if ($texto === $invertido) {
            echo "<p>La palabra <strong>{$_POST['texto']}</strong> es un palíndromo.</p>";
        } else {
            echo "<p>La palabra <strong>{$_POST['texto']}</strong> NO es un palíndromo.</p>";
        }
    }
    ?>
</body>
</html>
