<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 08/09/18
 * Time: 15:39
 */

    echo "Texto1: $_GET[texto1] <br> Texto2: $_GET[texto2] <br>";
    echo "Hidden: $_GET[hidden] <br> Password: $_GET[pass]";
    if (empty($_GET[check1])){
        echo "<br>Check1 no seleccionado";
    }else{
        echo "<br>Check1 seleccionado";
    }
    if (empty($_GET[check2])){
        echo "<br>Check2 no seleccionado";
    }else{
        echo "<br>Check2 seleccionado";
    }
    if (empty($_GET[check3])){
        echo "<br>Check3 no seleccionado";
    }else{
        echo "<br>Check3 seleccionado";
    }
    echo "<br>Radio grupo 1: $_GET[radio1]<br>";
    echo "Radio grupo 2: $_GET[radio2]";
    echo "<br>Lista: $_GET[lista]";
    ?>

