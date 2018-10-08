<pre>
<?php
if (session_start()) {
    $aux1 = $_POST['texto7'];
    $aux2 = $_POST['texto8'];
    $aux3 = $_POST['texto9'];
    $_SESSION['texto7'] = $aux1;
    $_SESSION['texto8'] = $aux2;
    $_SESSION['texto9'] = $aux3;
    for ($i = 1; $i < 10; $i++) {
        echo "El dato numero {$i} es: {$_SESSION['texto'.$i]}<br>";
    }
}
?>
    <a href="receptore5-4.php">EL LINK</a>
</pre>
