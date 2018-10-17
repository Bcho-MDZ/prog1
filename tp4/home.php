<pre>
<?php
  //trata de iniciar la sesion, si sale todo bien se fija si hay alguna sesion iniciada, si no hay te manda a loguear, si hay te saluda
  if (session_start()) {
    if ($_SESSION[habilitado]!=1) {
      //a la casa a loguearse
      header("location: http://localhost/programacion1/tp4/ejercicio7.php");
    }
    echo "<h3>..-Bienvenido/a de nuevo {$_SESSION[usuario]}-..";
  }
?>
</pre>
