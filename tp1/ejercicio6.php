<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<?php 
		echo "<pre>";
		for ($i=0; $i < 15 ; $i++) { 
			$arreglo[]=rand(1,50);
		}
		echo "Arreglo original: <br>";
		print_r($arreglo);
		for ($i=0; $i < 15; $i++) { 
			$palabra=$arreglo[i];
			for ($j=0; $j < 15; $j++) { 
				if ($arreglo2[j]==$palabra) {
					break;
				}
			}
			$arreglo2[i]=$palabra;			
		}
		print_r($arreglo2);
	 	echo "</pre>";
	 ?>
</body>
</html>