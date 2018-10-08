<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<?php 
		echo "<pre>";
		$x=rand(5,15);
		$max=1;
		$min=100;
		$parcial=0;
		$alarma=0;
		for ($i=0; $i < $x ; $i++) { 
			$y=rand(1,100);
			if ($y==20) {
				$alarma=1;
			}
			$arreglo[]= $y;
			if ($y>$max) {
				$max=$y;
			}
			if ($y<$min) {
				$min=$y;
			}
			$parcial=$parcial+$y;
		}
		$promedio=$parcial/$x;
		echo "El arreglo tiene $x elementos <br>";
		echo "Elementos del arreglo <br>";
		print_r($arreglo);
		echo "Minimo: $min <br>";
		echo "Maximo: $max <br>";
		echo "Promedio: $promedio <br>";
		if ($alarma==1) {
			echo "El numero 20 está dentro del arreglo<br>";
		}
		echo "</pre>";
	 ?>
</body>
</html>