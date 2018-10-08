<pre>


<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 07/10/18
 * Time: 19:16
 */
$nombre=$_FILES['archivo1']['name'];
$destino='importados/'.$nombre;
copy($_FILES['archivo1']['tmp_name'],$destino);
echo "<h3> ...Listado de imagenes...</h3>";

if ($gestor = opendir('./importados')) {
    while (false !== ($entrada = readdir($gestor))) {
        if ($entrada != "." && $entrada != ".." ) {
            $info = new SplFileInfo($entrada);
            $check=($info->getExtension());
            if ($check== 'jpg' || $check=='png'){
                echo "<img src=\"./importados/$entrada\" alt=\"$entrada\" height='80' width='80'>";
            }
        }
    }
    closedir($gestor);
}
?>

</pre>