<pre>
<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 09/10/18
 * Time: 16:30
 */
    if (session_start()) {
        if ($_SESSION['usuario'] != "") {
            $archivo=fopen('registro.txt','a');
            $hoy = date("Y-m-d H:i:s").";".end(explode("/",$_SERVER['SCRIPT_FILENAME']))."\n";
            fwrite($archivo,$hoy);
            fclose($archivo);
            echo "<h3>Usuario: {$_SESSION['usuario']}</h3>";
            echo "<a href=\"receptor10-2.php\">Volver a HOME</a><br>";
            echo "<a href=\"e10pagina1.php\">Pagina 1</a><br>";
            echo "<a href=\"e10pagina2.php\">Pagina 2</a><br>";
            echo "<br><br><h4><a href=\"e10pagina4.php\">Ver el Registro</a></h4>";
        }else{
            echo "Debe registrarse";
        }
    }else{
        echo "Problema al iniciar sesion";
    }
?>
</pre>
