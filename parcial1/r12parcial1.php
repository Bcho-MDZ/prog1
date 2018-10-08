<?php
$mesactual=$_GET['mes'];
$mes=['','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
$dia=$_GET[dia];
$año=$_GET[anio];
$check=$_GET[check1];
$rest = substr($año, 2, 2);

for($i=1;$i<13;$i++) {
    if ($mesactual == $mes[$i]) {
         $mes1=$i;
         break;
    }
}
if ($mes1<10){
    $mes1='0'.$mes1;
}

if ($dia<10){
    $dia='0'.$dia;
}

    if ($_GET[check1]==1){
        echo "Hoy es el $_GET[dia] de $_GET[mes] de $_GET[anio]";
    }else{
        echo "Hoy es el $dia/$mes1/$_GET[anio]";
    }
?>
<pre>
    <form action="" method="get">
        <label for="dia">DIA</label>
        <select name="dia" id="lista">
            <?php
            $y=0;
            for ($i=1;$i<32;$i++){
                if($i<10){
                    $y='0'.$i;
                }else{
                    $y=$i;
                }
                if ($i==$dia){
                    echo "<option value=\"$i\" selected='selected'>$y</option>";
                }else{
                    echo "<option value=\"$i\">$y</option>";
                }
            }
            ?>
            <br>
        </select>
        <label for="mes">MES</label>
        <select name="mes" id="mes">
            <?php
            if($check==1){
                $mes=['','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
                for($i=1;$i<13;$i++){
                    if ($mes[$i]==$mesactual){
                        echo "<option value=\"$mes[$i]\" selected='selected'>$mes[$i]</option>";
                    }else{
                        echo "<option value=\"$mes[$i]\">$mes[$i]</option>";
                    }
                }
            }else{
                $mes=['','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
                for($i=1;$i<13;$i++){
                    if($i<10){
                        $y='0'.$i;
                    }else{
                        $y=$i;
                    }
                    if ($mes[$i]==$mesactual){
                        echo "<option value=\"$mes[$i]\" selected='selected'>$mes1</option>";
                    }else{
                        echo "<option value=\"$mes[$i]\">$y</option>";
                    }
                }
            }

            ?>
        </select>
        <label for="anio">A&NtildeO</label>
        <select name="anio">
            <?php
            if($check==1) {
                for ($i = 1900; $i < 2101; $i++) {
                    if ($i == $año) {
                        echo "<option value=\"$i\" selected='selected'>$i</option>";
                    } else {
                        echo "<option value=\"$i\">$i</option>";
                    }
                }
            }else{
                for ($i = 00; $i < 99; $i++) {
                    if($i<10){
                        $y='0'.$i;
                    }else{
                        $y=$i;
                    }
                    if ($i == $rest) {
                        echo "<option value=\"$i\" selected='selected'>$y</option>";
                    } else {
                        echo "<option value=\"$i\">$y</option>";
                    }
                }
            }
            ?>
        </select>
        <?php
        echo "<input type=\"hidden\" name=\"mesnum\" value=\"$mesnum\">";
        ?>
        <br>
    </form>
</pre>
