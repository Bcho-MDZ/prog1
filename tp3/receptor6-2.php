<?php
/**
 * Created by PhpStorm.
 * User: roi
 * Date: 09/10/18
 * Time: 16:30
 */

if (session_start()){
    echo "<h3>Bienvenido {$_SESSION['usuario']}</h3>";
}

?>