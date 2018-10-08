<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
		echo "<pre>";
		$vector1= [0,1,2,3,4,5];
		echo "Arreglo vectorial: <br>";
		print_r($vector1);
	
	 	echo "<br>";
	  
	 	$info['nombre']="Rodrigo";
	 	$info['apellido']="Noya";
	 	echo "Arreglo asociativo simple: <br>";
	 	print_r($info);

	 	echo "<br>";
	 	$vector2=array(
	 				array(
	 					array(0,1,2,3),
	 					array(4,5,6,7),
	 				),
	 				array(
	 					array('a','b'),
	 					array('c','d'),
	 				)/**/
	 			);
	 	$x=0;
	 	echo "Arreglo vectorial de 3 dim <br>";
	 	foreach ($vector2 as $key) {
	 		echo "Posicion mas significativa $x<br>";
	 		print_r($key);
	 		$x++;
	 	}
	 	/*for ($i=0; $i < 3; $i++) { 
	 		for ($j=0; $j < 3 ; $j++) { 
	 			for ($k=0; $k < 3; $k++) { 
	 				$vector2[i][j][k]=$i*$j*$k;
	 			}
	 		}
	 	}*/

	 	echo "<br>";

	 	$info2= array(
	 			"nombres"=>array("Rodrigo","Andrés"),
	 			"apellidos"=>array("Noya","Insaurralde")
	 			);
	 	print_r($info2);
	  	echo "</pre>";

	  ?>
</body>
</html>