<main class="main-page">
    <h2 class="main-page_titulo">Editar pelicula</h2>

    <div class="data-container">
        <div>
            <img class="form_img" class="<?= !(isset($this->imagen) && $this->imagen !== '') ? 'ocultar' : '' ?>" src="<?= Config::URL_IMAGENES . "/" . $this->imagen ?>" alt="Imagen de la pelicula">
        </div>
        <div>
            <?php include "pelicula_form.php" ?>
        </div>
    </div>
    <div class="main-page_nav main-page_nav-flotante">
        <a class="main-page_link" href="<?= $this->url_back ?>">Volver</a>
    </div>
</main>