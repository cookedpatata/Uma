<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <script src="a.js"></script>
</head>

<body>
    <form method="post">
        <input type="text" name="texto">
        <input type="submit" name="enviar">
    </form>
    <form method="post" action=b.php>
        <input type="submit" name="terminar">
    </form>
    <?php
    session_start();
    if (!isset($_SESSION["cadenas"])) {
        $_SESSION["cadenas"] = "";
    }

    if (isset($_POST["enviar"]))
        $_SESSION["cadenas"] .= " " . $_POST["texto"];
    ?>
</body>

</html>