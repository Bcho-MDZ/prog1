<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<?php
		echo "<pre>";
		echo "String a Arreglo: <br>";
		$string= "0,1,2,3,4,5";
		echo "string: $string <br>";
		$arreglo1 = preg_split("/[,]+/", "$string");
		print_r($arreglo1);
		echo "<br>Arreglo a string: <br>";
		$unarreglodenumeros= [0,1,2,3,4,5];
		print_r($unarreglodenumeros);
		$x=count($unarreglodenumeros);
		foreach ($unarreglodenumeros as $key => $value) {
			if ($i==$x-1) {
				$concatena3 = $concatena3."$key";

			}elseif ($i<$x-1) {
				$concatena3 = $concatena3."$key".",";
			}
			$i++;
		}
		echo "string: $concatena3";
		echo "</pre>";
	 ?>
</body>
</html>