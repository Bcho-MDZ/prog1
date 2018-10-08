<pre>
    <form action="receptor6.php" method="get" enctype="multipart/form-data">
        <div>
            <label for="filas">FILAS: </label>
            <input type="text" name="filas" placeholder="ingrese la cantidad de filas...">
            <br>
            <label for="columnas">COLUMNAS: </label>
            <input type="text" name="columnas" placeholder="ingrese la cantidad de columnas...">
            <br>
            <?php
            $nombre=$_GET['nombre'];
            $apellido=$_GET['apellido'];
            $edad=$_GET['edad'];
            $pais=$_GET['pais'];
            $provincia=$_GET['provincia'];
            $departamento=$_GET['departamento'];
            $texto1=$_GET['texto1'];
            $texto2=$_GET['texto2'];
            $texto3=$_GET['texto3'];
            echo "<input type=\"hidden\" name=\"nombre\" value='$nombre'>";
            echo "<input type=\"hidden\" name=\"apellido\" value='$apellido'>";
            echo "<input type=\"hidden\" name=\"edad\" value='$edad'>";
            echo "<input type=\"hidden\" name=\"pais\" value='$pais'>";
            echo "<input type=\"hidden\" name=\"provincia\" value='$provincia'>";
            echo "<input type=\"hidden\" name=\"departamento\" value='$departamento'>";
            echo "<input type=\"hidden\" name=\"texto1\" value='$texto1'>";
            echo "<input type=\"hidden\" name=\"texto2\" value='$texto2'>";
            echo "<input type=\"hidden\" name=\"texto3\" value='$texto3'>";
            ?>
            <input type="submit" value="Crear tabla">
        </div>
    </form>
</pre>