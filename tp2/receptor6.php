<pre><table>
<?php

for ($i=0;$i<$_GET['filas'];$i++){
    echo "<tr>";
    for ($x=0;$x<$_GET['columnas'];$x++){
        echo "<td>$x</td>";
    }
    echo "</tr>";
}

?>
</table></pre>
