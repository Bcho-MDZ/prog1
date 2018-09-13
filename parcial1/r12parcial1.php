<?php
$mesactual=$_GET['mes'];
$mes=['','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
$dia=$_GET[dia];

for($i=1;$i<13;$i++) {
    if ($mesactual == $mes[$i]) {
         $mes1=$i;
         break;
    }
}
if ($mes1<10){
    $mes1='0'.$mes1;
}

if ($dia<10){
    $dia='0'.$dia;
}

    if ($_GET[check1]==1){
        echo "Hoy es el $_GET[dia] de $_GET[mes] de $_GET[anio]";
    }else{
        echo "Hoy es el $dia/$mes1/$_GET[anio]";
    }
?>