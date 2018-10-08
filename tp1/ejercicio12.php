

<pre>
<table>
<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 07/09/18
 * Time: 13:09
 */

 for($i=1; $i<29; $i++){
     $array[]=$i;
 }
 $parte=array_chunk($array,14);
 echo "<h2>Array original</h2>";
 print_r($parte);

 foreach($parte as $key ){
     echo"<tr>";
     foreach($key as $key2 => $value2){
         echo "<td>$value2</td>";
     }
     echo "</tr>";
 }

 //echo"<th>$array[1]</th>";


?>
</table>
</pre>

