<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
    <pre>


	<?php
        $contador=0;
		while(1){
		    $x=rand(1,30);
		    $contador++; // se puede contar con la funcion count($array)
		    $array[]=$x;
	        if($contador >=10 && $x==30) {
                echo "Se genero el numero 30 con $contador ciclos";
                break;
            }
        }
        echo"<br>Array original: <br>";
        print_r($array);
        echo "Array ordenado:<br>";
        sort($array);
        print_r($array);
        $x=ceil($contador/2);
        print_r(array_chunk($array,$x));
	 ?>
    </pre>
</body>
</html>

