<pre>
    <?php
    setlocale(LC_TIME, 'es_ES.UTF-8');
    $mesactual=strftime("%B");
    $diaactual=strftime("%d");
    $anioactual=strftime("%G");
    ?>
    <form action="r12p1.php">
        <label for="dia">DIA</label>
        <select name="dia" id="lista">
            <?php
                for ($i=1;$i<32;$i++){
                    if ($i==$diaactual){
                        echo "<option value=\"$i\" selected='selected'>$i</option>";
                    }else{
                        echo "<option value=\"$i\">$i</option>";
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
        <label for="anio">MES</label>
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
        <br>
        <input type="submit" value="Enviar">
    </form>
</pre>
