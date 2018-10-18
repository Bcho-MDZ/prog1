<pre>
  <table border='1'>
    <?php
    $sql=$_POST[consulta];

    $usuario="root";
    $clave="1234";
    $bd="programacion1";
    $servidor="localhost";
    $conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");

    $ejecucionSQL=$conexionPDO->prepare($sql);
    $ejecucionSQL->execute();
    $result = $conexionPDO->query($sql);
    $fields = array_keys($result->fetch(PDO::FETCH_ASSOC));

    echo "<tr>";
    for($i=0;$i<count($fields);$i++){
        echo "<td>$fields[$i]</td>";
    }
    echo "</tr>";
    
    while ($filaPDO=$ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      foreach ($filaPDO as $campoPDO) {
        echo "<td>$campoPDO</td>";
      }
      echo "</tr>";
    }
       ?>
 </table>
</pre>
