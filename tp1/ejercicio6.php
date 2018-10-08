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
		$arreglo[0]=0;
		$arreglo[1]=0;
		echo "Arreglo original: <br>";
		print_r($arreglo);

    /*echo "<br><br>arreglo sin duplicados:<br>";
    $array = array_unique($array);
    foreach ($array as $value){
    echo "$value\n";*/

		foreach ($arreglo as $key => $value) {
			for ($i=0; $i < 15; $i++) { 
				if ($arreglo2[$key]==$value) {
					continue;
				}else{
					$arreglo2[$key]=$value;
				}
			}			
		}
		print_r($arreglo2);
	 	echo "</pre>";
	 ?>
</body>
</html>