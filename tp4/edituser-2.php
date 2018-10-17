<?php
if ($_POST[id]="") {
  echo "<h3>ERROR DE ID</h3>";
  echo "<br><h4><a href='ejercicio4.php'>VOLVER</a> </h4>";
  die();
}

$usuario="root";
$clave="1234";
$bd="programacion1";
$servidor="localhost";
$conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");

$sql="update `persona` SET `nombre` = ':nombre', `apellido` = ':apellido', `documento` = ':documento', `edad` = ':edad' WHERE `persona`.`id` = :id ";
$ejecucionSQL= $conexionPDO->prepare($sql);
$ejecucionSQL->bindValue(':id',$_GET['ide']);
$ejecucionSQL ->execute();

$filaPDO=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);


?>
