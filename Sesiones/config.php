<?php

session_start();

$color = "";

print_r($_POST);

if (isset ($_POST["color"])){
        $_SESSION["back"] = $_POST["color"];
}

if (!isset($_SESSION["back"])){
    $_SESSION["back"] = $_POST["color"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elige color</title>
</head>
<body style="background-color:<?=$_SESSION["back"]?>;">
    <h1>Elige un color</h1>
    <form action="config.php" method="post">
        <input type="color" name="color" id="color">
        <input type="submit" value="Enviar">
    </form>
    <a href="page1.php">Pagina1</a>
    <a href="page2.php">Pagina2</a>
</body>
</html>