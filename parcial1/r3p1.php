<pre>
<?php
$usuario=$_POST[usuario];
$pass=$_POST[pass];
    $arreglo=array(
        "rodrigo"=>array("1234","rodri@gmail.com"),
        "pepe" =>array("4321","pepe@gmail.com"),
        "fernando" =>array("4321","fernando@gmail.com")
    );
    if ($arreglo[$usuario][0]==$pass){
        $mail=$arreglo[$usuario][1];
        echo "<br><h3>Ingreso correcto</h3>";
        echo "<br>su usuario es: $usuario";
        echo "<br>su clave es: $pass";
        echo "<br>su mail es: $mail";
    }else{
        echo "<h2>Ingreso incorrecto</h2>";
    }
?>
</pre>
