<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Calcular descuento según monto</h1>
    <form method="post">
        <label>Ingrese el monto de la compra:
            <input type="number" step="any" name="monto" required>
        </label>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = floatval($_POST["monto"]);

        if ($monto >= 500) {
            $descuento = 0.20;
        } elseif ($monto >= 200) {
            $descuento = 0.10;
        } else {
            $descuento = 0;
        }

        $montoFinal = $monto - ($monto * $descuento);
        echo "<p>Monto original: $monto <br> Descuento: " . ($descuento*100) . "% <br> Total a pagar: <strong>$montoFinal</strong></p>";
    }
    ?>
</body>
</html>
