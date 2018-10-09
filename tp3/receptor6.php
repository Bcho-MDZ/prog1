<pre>
<?php
    if (session_start()) {
        $_SESSION['usuario'] = $_POST[usuario];
        $_SESSION['pass'] = $_POST[pass];
        header("location: http://localhost/programacion1/tp3/receptor6-2.php");
    }
?>
</pre>
