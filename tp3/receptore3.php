<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Mail</td>
        <td>Info extra</td>
    </tr>
<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 07/10/18
 * Time: 19:16
 */
$nombre=$_FILES['archivo1']['name'];
$destino='importados/'.$nombre;
mkdir('/var/www/html/programacion1/tp3/importados',777);
echo "<br> Copiando $nombre a $destino<br>";
copy($_FILES['archivo1']['tmp_name'],$destino);
$archivo=fopen($destino,"r");
while($fila=fgets($archivo)){
    $substring=explode(";",$fila);
    echo "<tr><td>$substring[0]</td><td>$substring[1]</td><td>$substring[2]</td><td>$substring[3]</td></tr>";
}
fclose($archivo);
?>
</table>
