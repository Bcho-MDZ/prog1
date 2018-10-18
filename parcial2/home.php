<pre>
<?php
  //trata de iniciar la sesion, si sale todo bien se fija si hay alguna sesion iniciada, si no hay te manda a loguear, si hay te saluda
  if (session_start()) {
    if ($_SESSION[habilitado]!=1) {
      //a la casa a loguearse
      header("location: http://localhost/programacion1/parcial2/ejercicio7.php");
      die();
    }
    //redireccion segun tipo de usuario
    if ($_SESSION[habilitado]==1){
        if ($_SESSION[rol]==admin) {
          echo "<h3>Inicio de Sesion correcto, bienvenido de nuevo</h3>";
          echo "<form action=\"admin.php\" method=\"post\"><br><input type=\"submit\" value=\"CONTINUAR\"></form>";
          die();
        }
        if ($_SESSION[rol]==usuario){
          echo "<h3>Inicio de Sesion correcto, bienvenido de nuevo</h3>";
          echo "<form action=\"usuario.php\" method=\"post\"><br><input type=\"submit\" value=\"CONTINUAR\"></form>";
          die();
        }
    }else{
      echo "Debe iniciar sesion, problema de habilitacion";
    }
  }
?>
</pre>
