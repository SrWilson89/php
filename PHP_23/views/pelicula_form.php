<form class="form" action="" method="post" enctype="multipart/form-data">
    
    <div class="form_field">
        <label class="form_label" for="titulo">Titulo</label>
        <input class="form_input" type="text" name="titulo" id="titulo" value="<?= $_POST['titulo'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["titulo"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="duracion">Duracion</label>
        <input class="form_input" type="text" name="duracion" id="duracion" value="<?= $_POST['duracion'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["duracion"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="anio">Año de publicacion</label>
        <input class="form_input" type="text" name="anio" id="anio" value="<?= $_POST['anio'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["anio"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="pais">Pais</label>
        <input class="form_input" type="text" name="pais" id="pais" value="<?= $_POST['pais'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["pais"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="genero">Genero</label>
        <input class="form_input" type="text" name="genero" id="genero" value="<?= $_POST['genero'] ?? '' ?>">
        <p class="form_error"><?= $this->errores["genero"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="sipnosis">Sipnosis</label>
        <textarea class="form_textarea" name="sipnosis" id="sipnosis"><?= $_POST['sipnosis'] ?? '' ?></textarea>
        <p class="form_error"><?= $this->errores["sipnosis"] ?? '' ?></p>
    </div>
    <div class="form_field">
        <label class="form_label" for="imagen">Selecciona una imagen</label>
        <input class="form_input" type="file" name="imagen" id="imagen">
        <p class="form_error"><?= $this->errores["imagen"] ?? '' ?></p>
    </div>
    <div class="form_buttons">
        <input class="form_button" type="submit" name="enviar" value="Enviar">
    </div>
</form>