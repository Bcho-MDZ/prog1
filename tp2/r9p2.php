<pre>
    <form action="r9p3.php" method="get" enctype="multipart/form-data">
        <div>
            <label for="texto1">Texto 1: </label>
            <input type="text" name="texto1" placeholder="texto 1...">
            <br>
            <label for="texto2">Texto 2: </label>
            <input type="text" name="texto2" placeholder="texto 2...">
            <br>
            <label for="texto3">Texto 3: </label>
            <input type="text" name="texto3" placeholder="texto 3...">
            <br>
            <?php
            $nombre=$_GET['nombre'];
            $apellido=$_GET['apellido'];
            $edad=$_GET['edad'];
            $pais=$_GET['pais'];
            $provincia=$_GET['provincia'];
            $departamento=$_GET['departamento'];
            echo "<input type=\"hidden\" name=\"nombre\" value='$nombre'>";
            echo "<input type=\"hidden\" name=\"apellido\" value='$apellido'>";
            echo "<input type=\"hidden\" name=\"edad\" value='$edad'>";
            echo "<input type=\"hidden\" name=\"pais\" value='$pais'>";
            echo "<input type=\"hidden\" name=\"provincia\" value='$provincia'>";
            echo "<input type=\"hidden\" name=\"departamento\" value='$departamento'>";
            ?>
            <input type="submit" value="Enviar">
        </div>
    </form>
</pre>