<?php

session_start();

$numero = "";


if (!isset($_SESSION["back"])){
    $aleatorio = mt_rand(1,20);
    $_SESSION["back"] = $aleatorio;
    $pvisita = true;
} else {
    $pvisita = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el número</title>
</head>
<body>
    <?php if($pvisita) {?>
        <h1>Introduce un número entre el 1 y el 20</h1>
    <?php } ?>
    <form action="index.php" method="post">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>
    <?php if(!$pvisita){?>
        <?php if ($_SESSION["back"] > $_POST["numero"]) {?>
            <h2> El numero es mayor </h2>
        <?php }?>

        <?php if ($_SESSION["back"] < $_POST["numero"]) {?>
            <h2> El numero es menor </h2>
        <?php }?>

         <?php if ($_SESSION["back"] == $_POST["numero"]) {?>
            <h2> Has Acertado :) </h2>
        <?php }?>
    <?php } ?>
</body>
</html>