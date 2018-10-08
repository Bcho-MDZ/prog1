<style type="text/css">
    table, td{
        border: 3px solid #000;
    }
    tr{
        background-color: cornflowerblue;
    }
    tr:nth-child(2n){
        background-color: lightseagreen;
    }
</style>
<pre>
<table>
<?php
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
            if ($y==0 and $x>0) {
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