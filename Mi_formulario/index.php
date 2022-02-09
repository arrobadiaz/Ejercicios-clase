<?php

$bienvenido=true;
$nombre="";
$apellidos='';
$correo="";
$edad='';
$telefono="";

$errores = false;
$error_nombre = false;
$error_apellido = false;
$error_edad = false;
$error_telefono = false;

if(isset($_POST["enviar"])){
    $bienvenido=false;

    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre)<3){
        $error_nombre = true;
    }

    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre)==''){
        $error_nombre = true;
    }

    $apellidos = (isset($_POST["apellidos"]))?$_POST["apellidos"]:'';
    if(strlen($apellidos)==''){
        $error_apellidos = true;
    }

    $edad = (isset($_POST["edad"]))?$_POST["edad"]:'';
    if($edad == ''){
        $error_edad = true;
    }

    $edad = (isset($_POST["edad"]))?$_POST["edad"]:'';
    if($edad < 18){
        $error_edad = true;
    }

    $correo = (isset($_POST["correo"]))?$_POST["correo"]:'';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
        $error_correo = true;
    }


    if($error_nombre || $error_apellidos || $error_edad || $error_correo) {
        $errores = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php if($bienvenido) { ?>
        <h1 class="titulo">RESTAURANTE RAD</h1>
    <?php } ?>

    <?php if($bienvenido == false && $errores == false) { ?>
        <h1 class="realizado">Reserva realizada</h1>
    <?php } ?>

    <div>
        <?php if($errores) { ?>
            <div class="error">
                <h3>Los datos introducidos contienen errores</h3>
            </div>
        <?php } ?>
        <div>
            <form action="index.php" method="post">
                <fieldset class="campo">
                    <p class="parrafo">Datos Personales</p>
                    <label for="nombre">Nombre</label>
                   <input <?=($error_nombre)?'class="background-error"':'';?> name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>" />
                   <label for="apellidos">Apellidos</label>
                   <input <?=($error_apellidos)?'class="background-error"':'';?> name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
                   <label for="edad">Edad</label>
                   <input <?=($error_edad)?'class="background-error"':'';?> name="edad" id="edad" type="number" tabindex="3" value="<?=$edad?>"/>
                   <label for="correo">Correo electrónico</label>
                   <input <?=($error_correo)?'class="background-error"':'';?> name="correo" id="correo" type="text" tabindex="4" value="<?=$correo?>"/>
                </fieldset>
                <br>
                <fieldset class="campo" >
                    <p>Fecha de la reserva</p>
                    <input type="date" id="fecha" name="fecha"/>
                </fieldset>
                <br>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>