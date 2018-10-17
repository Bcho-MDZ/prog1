<pre>
<?php
  if (session_start()) {
    if ($_SESSION[habilitado]!=1) {
      header("location: http://localhost/programacion1/tp4/ejercicio7.php");
    }
    echo "<h3>..-Bienvenido/a de nuevo {$_SESSION[usuario]}-..";
  }
?>
</pre>
