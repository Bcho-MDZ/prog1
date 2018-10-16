<?php
if (file_exists('registro.txt')){
    unlink('registro.txt');
}
?>
<pre>
    <h3>...Log IN...</h3>
    <form action="receptor10.php" method="post" enctype="multipart/form-data">
        <label for="user">Usuario</label>
        <input type="text" name="user" placeholder="Ingrese usario aqui...">
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Ingresela aqui...">
        <input type="submit" value="Ingresar">
    </form>
</pre>


