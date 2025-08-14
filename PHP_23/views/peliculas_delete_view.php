<main class="main-page">
    <h2 class="main-page_titulo">Eliminar pelicula</h2>

    <?php include "pelicula_info.php" ?>

    <div class="main-page_nav">
        <a class="main-page_link" href="<?= $this->url_delete ?>">Eliminar pelicula definitivamente</a>
    </div>

    <div class="main-page_nav main-page_nav-flotante">
        <a class="main-page_link" href="<?= $this->url_back ?>">Volver</a>
    </div>
</main>