<?php

$numero = $_POST['numero'];
$_GET = $numero;
$min = 0;
$max = 255;
$sec = 60;
$url = "http://localhost:9000/index.php?numero=".$_GET."&generar=Generar?>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL=<?php echo $url?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide de asteriscos</title>
</head>
<body>
    <div style="text-align: center"> 
        <h1 aling="center">Pirámide de asteriscos</h1>
        <form action="index.php" method="post">
            <fieldset>
                <label for="numero">Nº de asteriscos</label>
                <input name="numero" id="numero" type="text" tabindex="1"/>
                <input type="submit" name="generar" value="Generar">
            </fieldset>
        </form>
        <?php

            for ($fila=1;$fila<=$_POST["numero"];$fila++){
                for ($columna=0;$columna<$fila;$columna++){
                    $aleatorio1=rand($min,$max);
                    $aleatorio2=rand($min,$max);
                    $aleatorio3=rand($min,$max);
                    echo "<span style='color: rgb($aleatorio1,$aleatorio2,$aleatorio3)'>*</span>";
                }
                echo "<br>";
            }
        
        ?>
    </div>
</body>
</html>
