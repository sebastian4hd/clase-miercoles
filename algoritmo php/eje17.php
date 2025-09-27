<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Simulación de login</h1>
    <form method="post">
        <label>Usuario:
            <input type="text" name="usuario" required>
        </label><br><br>
        <label>Contraseña:
            <input type="password" name="clave" required>
        </label><br><br>
        <button type="submit">Ingresar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];

        if ($usuario === "admin" && $clave === "1234") {
            echo "<p>Bienvenido <strong>$usuario</strong>, login exitoso.</p>";
        } else {
            echo "<p>Usuario o contraseña incorrectos.</p>";
        }
    }
    ?>
</body>
</html>
