<div class="info">
    <div class="info_campo">
        <label class="info_label">id pelicula:</label>
        <p class="info_text"><?= $this->pelicula->id_pelicula ?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">Título:</label>
        <p class="info_text"><?= $this->pelicula->titulo ?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">duracion:</label>
        <p class="info_text"><?= $this->pelicula->duracion?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">Año de estreno:</label>
        <p class="info_text"><?= $this->pelicula->anio ?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">Pais:</label>
        <p class="info_text"><?= $this->pelicula->pais ?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">Genero:</label>
        <p class="info_text"><?= $this->pelicula->genero ?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">Sipnosis:</label>
        <p class="info_text"><?= $this->pelicula->sipnosis?></p>
    </div>
    <div class="info_campo">
        <label class="info_label">Imagen</label>
        <img src="<?= Config::URL_IMAGENES . "/" . $this->pelicula->imagen ?>" alt="" style="width: 20vw;" style="height: 10vh;">
    </div>
</div>
