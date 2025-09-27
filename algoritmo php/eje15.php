<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Ordenar números</h1>
    <form method="post">
        <label>Ingrese números separados por comas:
            <input type="text" name="numeros" required>
        </label>
        <button type="submit">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST["numeros"];
        $arreglo = array_map("intval", explode(",", $entrada));
        sort($arreglo);
        echo "<p>Arreglo ordenado: <strong>" . implode(", ", $arreglo) . "</strong></p>";
    }
    ?>
</body>
</html>
