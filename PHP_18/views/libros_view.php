<main class="main-page">
    <h2 class="main-page_titulo">Libros</h2>

    <div class="card-container">
        <?php foreach ($this->libros as $libro) { ?>
            <article class="card">
                <h3 class="card_titulo"><?= $libro->titulo ?></h3>
                <div class="card_body">
                    <p class="card_text"><?= $libro->descripcion ?></p>
                    <p class="card_text card_text-right card_text-bold"><?= $libro->anio ?> €</p>
                </div>
                <div class="card_footer">
                    <a class="card_link <?= $this->classEnlaces ?>" href="libros/delete/<?= $libro->isbn ?>">Eliminar</a>
                    <a class=" card_link <?= $this->classEnlaces ?>" href="libros/edit/<?= $libro->isbn ?>">Editar</a>
                </div>
            </article>
        <?php } ?>
    </div>
    <div class="main-page_nav main-page_nav-flotante">
        <a class="main-page_link <?= $this->classEnlaces ?>" href="<?= $this->url_nuevo ?>">Nuevo</a>
    </div>
</main>