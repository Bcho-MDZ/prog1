<pre>
    <h3>...Ingrese sus datos...</h3>
    <form action="receptore5-3.php" method="post" enctype="multipart/form-data">
        <label for="texto7">Septimo dato</label>
        <input type="text" name="texto7" placeholder="Ingrese el texto aqui...">
        <label for="texto8">Octavo dato</label>
        <input type="text" name="texto8" placeholder="Ingrese el texto aqui...">
        <label for="texto9">Noveno dato</label>
        <input type="text" name="texto9" placeholder="Ingrese el texto aqui...">
        <input type="submit" value="Subir">
    </form>
</pre>
<?php
if (session_start()) {
    $aux1 = $_POST['texto4'];
    $aux2 = $_POST['texto5'];
    $aux3 = $_POST['texto6'];
    $_SESSION['texto4'] = $aux1;
    $_SESSION['texto5'] = $aux2;
    $_SESSION['texto6'] = $aux3;
}
?>