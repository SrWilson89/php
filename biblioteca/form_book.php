<form action="" method="POST">
    <div>
        <label for="titulo">Titulo</label>
        <input value="<?= $libro["titulo"] ?? '' ?>" type="text" name="titulo" id="titulo">
    </div>
    <div>
        <label for="editorial">Editorial</label>
        <input value="<?= $libro["editorial"] ?? '' ?>" type="text" name="editorial" id="editorial">
    </div>
    <div>
        <label for="anio">Año de publicación</label>
        <input value="<?= $libro["anio_publicacion"] ?? '' ?>" type="text" name="anio" id="anio">
    </div>
    <div>
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion"><?= $libro["descripcion"] ?? '' ?></textarea>
    </div>
    <div>
        <input type="submit" value="Enviar" name="enviar">
    </div>
</form>