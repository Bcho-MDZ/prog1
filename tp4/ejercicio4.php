<style type="text/css">
    table, td{
        border: 1px solid #000;
    }
    tr{
        background-color: cornflowerblue;
    }
    tr:nth-child(2n){
        background-color: lightblue;
    }
</style>
<pre>
  <?php
    $usuario="root";
    $clave="1234";
    $bd="programacion1";
    $servidor="localhost";

    $conexionPDO= new PDO("mysql:host=$servidor;dbname=$bd;charset=UTF8","$usuario","$clave");
   ?>
   <h3>...Tabla de persona...</h3>
   <table border='1'>
    <?php
      $sql="select * from persona";
      $ejecucionSQL=$conexionPDO->prepare($sql);
      $ejecucionSQL->execute();
      echo "<tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>Documento</td><td>Edad</td><td>Borrar</td></tr>";
      while ($filaPDO=$ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($filaPDO as $campoPDO) {
          echo "<td>$campoPDO</td>";
        }
        echo "<td align='center'><a href='deluser.php?ide={$filaPDO[id]}'>X</a></td>";
        echo "</tr>";
      }
     ?>
   </table>
</pre>
