<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 14/10/18
 * Time: 13:41
 */
$enlace = "registro.txt";
header ("Content-Disposition: attachment; filename=registro.txt ");
header ("Content-Type: application/octet-stream");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);
?>