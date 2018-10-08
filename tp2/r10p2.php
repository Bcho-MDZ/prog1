<?php
    $numero=$_POST['numero'];
    echo "<h3>Productos listados: $numero</h3>";
    for ($i=0;$i<$numero;$i++){
        $seleccion="check$i";
        $check=$_POST[$seleccion];
        $y=$i+1;
        $cantidad="cantidad$i";
        $cant=$_POST[$cantidad];
        if ($check==1) {
            echo "<br>--------------------------------------------------";
            echo "<br><h5>Producto numero: $y</h5>cantidad: $cant";
        }
    }
?>
