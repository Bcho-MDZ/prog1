
<?php
  //conexion
  $usuario="root";
  $clave="1234";
  $bd="programacion1";
  $servidor="localhost";

  $conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");
  $sql="insert into persona (nombre,apellido,documento,edad) values (:nombre,:apellido,:documento,:edad)";
  $ejecucionSQL= $conexionPDO->prepare($sql);
  $params=array('nombre' => 'Rodrigo', 'apellido' => 'Noya', 'documento' => '40070666', 'edad' => '21');
  $ejecucionSQL ->execute($params);
  $params=array('nombre' => 'Andres', 'apellido' => 'Noya', 'documento' => '8282004', 'edad' => '68');
  $ejecucionSQL ->execute($params);
  $params=array('nombre' => 'Ignacio', 'apellido' => 'Noya', 'documento' => '37001010', 'edad' => '24');
  $ejecucionSQL ->execute($params);

 ?>
