<table border="1">
    <tr>
        <td>Pagina</td>
        <td>Fecha</td>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: roi
     * Date: 07/10/18
     * Time: 19:16
     */
    $archivo=fopen("registro.txt","r");
    while($fila=fgets($archivo)){
        $substring=explode(";",$fila);
        echo "<tr><td>$substring[1]</td><td>$substring[0]</td></tr>";
    }
    echo "<form action=\"e10descargar.php\" method=\"post\"><br><input type=\"submit\" value=\"Descargar Registro\"></form>";
    fclose($archivo);
    ?>
</table>