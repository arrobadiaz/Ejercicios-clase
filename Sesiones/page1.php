<?php

session_start();

if(isset($_SESSION["back"])){
    print_r($_SESSION);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?=$_SESSION["back"]?>">
    <h1>Pagina 1</h1>
    <a href="page1.php">Pagina 1</a>
    <a href="page2.php">Pagina 2</a>
    <a href="config.php">Colores</a>
</body>
</html>