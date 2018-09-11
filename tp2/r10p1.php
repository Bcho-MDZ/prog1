<pre>
    <form action="r10p2.php" method="post">
        <?php
            $numero=$_GET['numero'];
            echo "<h1>Se compraran los productos seleccionados</h1>";
            for ($i=0;$i<$numero;$i++){
                echo "<br>";
                echo "<br>";
                $y=$i+1;
                echo "<h3>Producto: $y</h3>";
                echo "<div>";
                echo "<label for='cantidad$i'>Cantidad: </label><input type='text' name='cantidad$i' value='0'>";
                echo "<br>";
                echo "<label for='check$i'>Comprar? </label><input type='checkbox' name='check$i' value='1'>";
                echo "<input type='hidden' name='numero' value='$numero'>";
                echo "</div>";
            }
            echo "<input type='submit' value='COMPRARRR''>";
        ?>
    </form>
</pre>
