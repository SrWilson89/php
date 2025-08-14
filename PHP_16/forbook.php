<form action="" method="POST">
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="<?= $pelicula["titulo"] ?? '' ?>">
        <div class="error"><?= $errores["titulo"] ?? "" ?></div>
    </div>
    <br>
    <div>
        <label for="anio">Año</label>
        <input type="text" name="anio" id="anio" value="<?= $pelicula["anio"] ?? '' ?>">
        <div class="error"><?= $errores["anio"] ?? "" ?></div>
    </div>
    <br>
    <div>
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" id="editorial" value="<?= $pelicula["editorial"] ?? "" ?>">
        <div class="error"><?= $errores["editorial"] ?? "" ?></div>
    </div>
    <br>
    <div>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"
        ><?=$pelicula["descripción"] ?? "" ?>
        </textarea>
        <div class="error"><?= $errores["descripcion"] ?? "" ?></div>
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar" name="enviar" class="boton">
    </div>

</form>