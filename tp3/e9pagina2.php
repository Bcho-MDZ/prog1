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
            echo "<a href=\"receptor9-2.php\">Volver a HOME</a><br>";
            echo "<a href=\"e9pagina1.php\">Pagina 1</a><br>";
            echo "<a href=\"e9pagina3.php\">Pagina 3</a><br>";
        }else{
            echo "Debe registrarse";
        }
    }else{
        echo "Problema al iniciar sesion";
    }
?>

</pre>