<pre>
<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 07/10/18
 * Time: 18:58
 */
print_r($_FILES);
$archivo=fopen($_FILES['archivo1']['tmp_name'],"r");
while($fila=fgets($archivo)){
    echo $fila;
}
?>
</pre>
