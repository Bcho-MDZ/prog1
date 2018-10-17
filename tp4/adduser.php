<pre>
<?php
  foreach ($_POST as $key => $value) {
    if ($value=="") {
      echo "<h3>NO PUEDEN HABER CAMPOS VACIOS</h3>";
      echo "<br><h4><a href='ejercicio3.php'>VOLVER</a> </h4>";
      die();
    }
  }
  $usuario="root";
  $clave="1234";
  $bd="programacion1";
  $servidor="localhost";

  $conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");
  $sql="insert into persona (nombre,apellido,documento,edad) values (:nombre,:apellido,:documento,:edad)";
  $ejecucionSQL= $conexionPDO->prepare($sql);
  $params=array('nombre' => $_POST[nombre], 'apellido' => $_POST[apellido], 'documento' => $_POST[documento], 'edad' => $_POST[edad]);
  $ejecucionSQL ->execute($params);
  echo "<h3>Agregado correctamente :D</h3>";
  echo "<br><h4><a href='ejercicio3.php'>VOLVER</a> </h4>";
?>
</pre>
