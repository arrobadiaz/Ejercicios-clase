<!DOCTYPE html>
<html lang="en">

<?php

if(!isset($_COOKIE['visita'])){
    $visita = 1;
    setcookie("visita",$visita);
} else {
    $visita = $_COOKIE['visita'];
    $visita = $visita + 1;
    setcookie("visita",$visita);
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="page1.php">Hola</a>
    <a href="page2.php">Mundo</a>
    <a href="page3.php">Cookies</a>
    <h1>Cookie</h1>
    <?php if($visita == 1) { ?>
        <h1>Bienvenido</h1>
    <?php } else { ?>
        <h1>Es tu <?=$visita?> visita</h1>
    <?php }?> 
</body>
</html>