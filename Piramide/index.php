<?php
echo "<br>POST:<br>";
print_r($_POST);

for ($i=0;$i<$_POST["numero"];$i++){
    echo "*";
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
        <form action="index.php" method="post">
            <fieldset>
                <label for="numero">Nº de asteriscos</label>
                <input name="numero" id="numero" type="text" tabindex="1"/>
                <input type="submit" name="generar" value="Generar">
            </fieldset>
        </form>
    </div>
</body>
</html>