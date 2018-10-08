<pre>
<table>
<form action="r7p2.php" method="get" enctype="multipart/form-data">
<?php
for ($i=0;$i<$_GET['x'];$i++){
    echo "<tr><label for='campo$i'>Campo $i:</label><input type='text' name='campo$i' placeholder='Ingrese un valor...'></tr><br>";
}
echo "<input type='submit' value='Enviar'>";
?>
</form>
</table>
</pre>
