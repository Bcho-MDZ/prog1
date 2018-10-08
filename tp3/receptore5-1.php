<pre>
    <h3>...Ingrese sus datos...</h3>
    <form action="receptore5-2.php" method="post" enctype="multipart/form-data">
        <label for="texto4">Cuarto dato</label>
        <input type="text" name="texto4" placeholder="Ingrese el texto aqui...">
        <label for="texto5">Quinto dato</label>
        <input type="text" name="texto5" placeholder="Ingrese el texto aqui...">
        <label for="texto6">Sexto dato</label>
        <input type="text" name="texto6" placeholder="Ingrese el texto aqui...">
        <input type="submit" value="Subir">
    </form>
</pre>
<?php
    if (session_start()){
        $aux1=$_POST['texto1'];
        $aux2=$_POST['texto2'];
        $aux3=$_POST['texto3'];
        $_SESSION['texto1']=$aux1;
        $_SESSION['texto2']=$aux2;
        $_SESSION['texto3']=$aux3;
    }else{
        echo "Error al crear la sesion";}

?>
