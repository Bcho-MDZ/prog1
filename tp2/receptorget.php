<pre>
<?php
if (empty($_GET)){
    echo "<br> No se pasaron datos";
}else{
    foreach($_GET as $key => $value){
        echo "Campo: $key => Valor: $value<br>";
    }
}

?>
</pre>
