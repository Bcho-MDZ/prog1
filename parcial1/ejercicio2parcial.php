<pre>
    <?php
    setlocale(LC_TIME, 'es_ES.UTF-8');
    $mesactual=strftime("%B");
    $diaactual=strftime("%d");
    $anioactual=strftime("%G");
    ?>
    <form action="r12parcial1.php" method="get">
        <label for="dia">DIA</label>
        <select name="dia" id="lista">
            <?php
                for ($i=1;$i<32;$i++){
                    if($i<10){
                        $y='0'.$i;
                    }else{
                        $y=$i;
                    }
                    if ($i==$diaactual){
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
                $mes=['','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
                for($i=1;$i<13;$i++){
                    if ($mes[$i]==$mesactual){
                        echo "<option value=\"$mes[$i]\" selected='selected'>$mes[$i]</option>";
                    }else{
                        echo "<option value=\"$mes[$i]\">$mes[$i]</option>";
                    }
                }
            ?>
        </select>
        <label for="anio">A&NtildeO</label>
        <select name="anio">
            <?php
            for($i=1900;$i<2101;$i++){
                if ($i==$anioactual){
                    echo "<option value=\"$i\" selected='selected'>$i</option>";
                }else{
                    echo "<option value=\"$i\">$i</option>";
                }
            }
            ?>
        </select>
        <?php
         echo "<input type=\"hidden\" name=\"mesnum\" value=\"$mesnum\">";
        ?>
        <br>
        <label for="check1">Formato largo:</label>
        <input type="checkbox" name="check1" value="1">SI
        <br>
        <input type="submit" value="Enviar">
    </form>
</pre>
