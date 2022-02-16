<?php 
$visita = 0;
if(!isset($_COOKIE['visita'])) {
    $visita = 1;
} else {
    $visita = $_COOKIE['visita'];
    $visita = $visita + 1;
}
setcookie("visita", $visita);
?>