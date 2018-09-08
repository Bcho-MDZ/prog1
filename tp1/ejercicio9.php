<pre>
<table>
<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 06/09/18
 * Time: 12:32
 */

    for($x=0;$x<6;$x++){ //FILA
        echo "<tr>";
        $letra='A';
        for($y=0;$y<6;$y++){ //COLUMNA
            if($y==0 and $x==0){
                echo "<td></td>";
            }
            if ($x==0 and $y>0){
                echo "<td>$letra</td>";
                $letra++;
            }
            if ($y==0) {
                echo "<td>$x</td>";
            }
            if ($x!=0 and $y!=0){
                echo "<td>$letra$x</td>";
            }

        }

        echo "</tr>";
    }

?>
</table>
</pre>