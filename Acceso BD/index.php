<?php 
include('acceso_datos.php');

$datos = $conexion_db->query('SELECT * from Ciclistas');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado base de datos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Listado de Ciclistas</h1>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Trofeos</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $fila) {?>
            <tr>
                <td><?=$fila['id']?></td>
                <td>
                    <a href="detalle.php?id=<?=$fila['id']?>">
                        <?=$fila['nombre']?>
                    </a>
                </td>
                <td><?=$fila['num_trofeos']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>