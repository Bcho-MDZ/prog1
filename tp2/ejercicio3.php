<form action="receptorejercicio3.php" method="get" enctype="multipart/form-data">
    <div>
        <label for="texto1">Texto1: </label>
        <input type="text" name="texto1" value="texto1">
    </div>
    <div>
        <label for="texto2">Texto2: </label>
        <input type="text" name="texto2" value="texto2">
    </div>
    <div>
        <input type="hidden" name="hidden" value="ocultooo">
    </div>
    <div>
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" value="contraseña">
    </div>
    <div>
        <br>
        <label for="checkbox">Seleccione una opcion: <br></label>
        <input type="checkbox" name="check1" value="1">Opcion 1 <br>
        <input type="checkbox" name="check2" value="1">Opcion 2 <br>
        <input type="checkbox" name="check3" value="1">Opcion 3 <br>
    </div>
    <div>
        <br>
        <label for="radio1">Grupo 1: <br></label>
        <input type="radio" name="radio1" value="1">Opcion 1 <br>
        <input type="radio" name="radio1" value="2">Opcion 2 <br>
        <input type="radio" name="radio1" value="3">Opcion 3 <br>
    </div>
    <div>
        <br>
        <label for="radio2">Grupo 2: <br></label>
        <input type="radio" name="radio2" value="1">Opcion 1 <br>
        <input type="radio" name="radio2" value="2">Opcion 2 <br>
        <input type="radio" name="radio2" value="3">Opcion 3 <br>
    </div>
    <div>
        <br>
        <label for="lista">Lista</label>
        <select name="lista" id="lista">
            <option value="op1">Opcion 1</option>
            <option value="op2">Opcion 2</option>
            <option value="op3">Opcion 3</option>
            <option value="op4">Opcion 4</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Ingresar">
    </div>
</form>