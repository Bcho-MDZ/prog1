<pre>
    <form action="">
        <h3>...Lista desplegable...</h3>
        <div>
            <label for="lista">Lista</label>
            <select name="lista" id="lista">
                <?php
                    $defecto=1;
                    if ($_GET['lista']>=$_GET['defecto']){
                        $defecto=$_GET['defecto'];
                    }
                    for ($i=0;$i<$_GET['lista'];$i++){
                        $y=$i+1;
                        if ($y==$defecto){
                            echo "<option value=\"$y\" selected='selected'>Opcion a seleccionar Nro. $y</option>";
                        }else{
                            echo "<option value=\"$y\">Opcion a seleccionar Nro. $y</option>";
                        }
                    }
                ?>
            </select>
            <input type="submit" value="Ingresar">
        </div>
    </form>
</pre>