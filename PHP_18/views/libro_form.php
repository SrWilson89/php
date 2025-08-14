<form class="form" action="" method="post" enctype="multipart/form-data">
    <div class="form_field">
        <label class="form_label" for="isbn">isbn</label>
        <input class="form_input" type="text" name="isbn" id="isbn" value="<?= $_POST['isbn'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["isbn"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="titulo">Titulo</label>
        <input class="form_input" type="text" name="titulo" id="titulo" value="<?= $_POST['titulo'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["titulo"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="anio_publicacion">Año de publicacion</label>
        <input class="form_input" type="text" name="anio_publicacion" id="anio_publicacion" value="<?= $_POST['anio_publicacion'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["anio_publicacion"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="editorial">Editoral</label>
        <input class="form_input" type="text" name="editorial" id="editorial" value="<?= $_POST['editorial'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["editorial"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="descipcion">Descripcion</label>
        <textarea class="form_textarea" name="descripcion" id="descripcion"><?= $_POST['descripcion'] ?? '' ?></textarea>
        <p class="form_error"><?= $this->errores["descripcion"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="imagen">Selecciona una imagen para el producto</label>
        <input class="form_input" type="file" name="imagen" id="imagen">
        <p class="form_error"><?= $this->errores["imagen"] ?? '' ?></p>
    </div>
    <div class="form_buttons">
        <input class="form_button" type="submit" name="enviar" value="Enviar">
    </div>
</form>