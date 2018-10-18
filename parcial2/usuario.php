<pre>
<?php
if (session_start()) {
  if ($_SESSION[habilitado]!=1) {
    //a la casa a loguearse
    header("location: http://localhost/programacion1/parcial2/ejercicio7.php");
    die();
  }
  if ($_SESSION[rol]=='usuario') {
    echo "<h3>Pagina de usuario normal !</h3>";
  }else{
    header("location: http://localhost/programacion1/parcial2/ejercicio7.php");
  }
}
?>
</pre>
