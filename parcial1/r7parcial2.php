<pre>
<table>
<?php
$min=1000;
$max=0;
$prom=0;
echo "<tr>";
foreach ($_GET as $key => $value){
    echo "<td>$value</td>";
    if ($value > $max){
        $max=$value;
    }
    if ($value < $min){
        $min=$value;
    }
    $prom=$prom+$value;
}
echo "</tr>";
echo "</table>";
$y=$prom/count($_GET);
echo "<br>Minimo: $min<br>Maximo: $max<br>Promedio: $y";
?>
</pre>
