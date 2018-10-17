<pre>
<?php
  if ($_GET[id]="") {
    echo "<h3>ERROR</h3>";
    echo "<br><h4><a href='ejercicio4.php'>VOLVER</a> </h4>";
    die();
  }

  $usuario="root";
  $clave="1234";
  $bd="programacion1";
  $servidor="localhost";
  $conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");

  $sql="delete FROM persona WHERE persona.id = :id";
  $ejecucionSQL= $conexionPDO->prepare($sql);
  $ejecucionSQL->bindValue(':id',$_GET['ide']);
  $ejecucionSQL ->execute($params);

  echo "<h3>Eliminado correctamente =(</h3>";
  echo "<br><h4><a href='ejercicio4.php'>VOLVER</a> </h4>";
?>
</pre>
