<pre>
<?php
if (session_start()) {
  if ($_SESSION[habilitado]!=1) {
    //a la casa a loguearse
    header("location: http://localhost/programacion1/parcial2/ejercicio7.php");
    die();
    }
  if ($_SESSION[rol]=='admin') {
  echo "<h3>Administracion !</h3>";
  }else{
    header("location: http://localhost/programacion1/parcial2/ejercicio7.php");
  }
}

?>
</pre>
