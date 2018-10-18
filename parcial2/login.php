<pre>
<?php
//controlar si los campos estan vacios
  if ($_POST[usuario]=="" && $_POST[password]=="") {
    echo "<h3>Debes ingresar usuario y contraseña </h3>";
    echo "<br><h4><a href='ejercicio7.php'>VOLVER</a> </h4>";
    die();
  }

  //creo la conexion para la consulta
  $usuario="root";
  $clave="1234";
  $bd="programacion1";
  $servidor="localhost";
  $conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");

  //consulta, si existe el usuario y la contraseña esta bien lee la fila y guarda los valores en sesion
  $sql="select * from `usuario` where usuario = :nom and clave=:clav and habilitado =1";
  $ejecucionSQL= $conexionPDO->prepare($sql);
  $ejecucionSQL->bindValue(':nom',$_POST['nombre']);
  $ejecucionSQL->bindValue(':clav',$_POST['password']);
  $ejecucionSQL ->execute();

  //pido la fila, sólo va a devolver algo si pudo pedirlo de la tabla asi que no hace falta comprobar nada, si no está bien usuario y contra creo que devuleve vacio o no devuelve
  //en cuyo caso habria que hacer algo como empty($filaPDO);
  if (empty($filaPDO=$ejecucionSQL->fetch(PDO::FETCH_ASSOC))) {
    echo "<h3>Usuario o contraseña inválida / Usuario deshabilitado</h3>";
    echo "<br><h4><a href='ejercicio7.php'>VOLVER</a> </h4>";
    die();
  }
  //si se llega a este punto es porque si devolvio algo la consulta entonces está bien el usuario y contraseña
  if (session_start()){
    $_SESSION[rol]=$filaPDO[rol];
    $_SESSION[habilitado]=1;
    header("location: http://localhost/programacion1/parcial2/home.php");
  }
 ?>
</pre>
