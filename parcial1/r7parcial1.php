<pre>
<table>
<form action="r7parcial2.php" method="get" enctype="multipart/form-data">
<?php
$cantidad=$_GET['x'];
if ($cantidad<=5){
    $cantidad=5;
}
for ($i=0;$i<$cantidad;$i++){
    $y=$i+1;
    echo "<tr><label for='campo$i'>Campo $y:</label><input type='text' name='campo$i' placeholder='Ingrese un valor...'></tr><br>";
}
echo "<input type='submit' value='Enviar'>";
?>
</form>
</table>
</pre>
