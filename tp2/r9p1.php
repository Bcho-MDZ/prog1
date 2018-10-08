<pre>
    <form action="r9p2.php" method="get" enctype="multipart/form-data">
        <div>
            <label for="pais">Pais: </label>
            <input type="text" name="pais" placeholder="ingrese su pais de nac...">
            <br>
            <label for="provincia">Prov/estado: </label>
            <input type="text" name="provincia" placeholder="ingrese su prov/estad...">
            <br>
            <label for="departamento">Dpto: </label>
            <input type="text" name="departamento" placeholder="ingrese su dpto...">
            <br>
            <?php
            $nombre=$_GET['nombre'];
            $apellido=$_GET['apellido'];
            $edad=$_GET['edad'];
            echo "<input type=\"hidden\" name=\"nombre\" value='$nombre'>";
            echo "<input type=\"hidden\" name=\"apellido\" value='$apellido'>";
            echo "<input type=\"hidden\" name=\"edad\" value='$edad'>";
            ?>
            <input type="submit" value="Enviar">
        </div>
    </form>
</pre>