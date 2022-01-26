<?php

$asterisco = "*";
$min = 0;
$max = 255;

header("Location: http://localhost:9000",TRUE,301);
for ($fila=1;$fila<=$_GET["numero"];$fila++){
    for ($columna=1;$columna<$fila;$columna++){
        $aleatorio1=rand($min,$max);
        $aleatorio2=rand($min,$max);
        $aleatorio3=rand($min,$max);
        echo "<span style='color: rgb($aleatorio1,$aleatorio2,$aleatorio3)'>*</span>";
    }
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide de asteriscos</title>
</head>
<body>
    <div>
        <h1 aling="center">Pirámide de asteriscos</h1>
        <form action="index.php" method="get">
            <fieldset>
                <label for="numero">Nº de asteriscos</label>
                <input name="numero" id="numero" type="text" tabindex="1"/>
                <input type="submit" name="generar" value="Generar">
            </fieldset>
        </form>
    </div>
</body>
</html>