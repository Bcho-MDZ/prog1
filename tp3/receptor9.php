<pre>
<?php
    if (session_start()) {
        $usuario = $_POST['user'];
        $pass = $_POST['passwords'];
        $_SESSION['usuario'] = $usuario;
        $_SESSION['pass'] = $pass;
        header("location: http://localhost/programacion1/tp3/receptor9-2.php");
    }else{echo "error de sesion";}
?>
</pre>



