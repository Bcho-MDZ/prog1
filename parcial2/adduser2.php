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
  $sql="insert into usuario (usuario,clave) values (:usu,:clav)";
  $ejecucionSQL= $conexionPDO->prepare($sql);
  $params=array('usu' => $_POST[nombre], 'clav' => $_POST[password]);
  $ejecucionSQL ->execute($params);
  echo "<h3>Agregado correctamente</h3>";
  echo "<br><h4><a href='ejercicio7.php'>Ingresar</a> </h4>";
?>
</pre>
