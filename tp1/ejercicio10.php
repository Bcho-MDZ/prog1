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
 echo "<h2>array sin partir</h2>";
 print_r($array);

 $parte=array_chunk($array,14);
 echo "<h2>Array partido</h2>";
 print_r($parte);
echo "<h2>Array partido como TABLA</h2>";
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