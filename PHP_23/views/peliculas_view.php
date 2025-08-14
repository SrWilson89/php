<main class="main-page">
    <h2 class="main-page_titulo">peliculas</h2>

    <div class="card-container">
        <?php foreach ($this->peliculas as $pelicula) { ?>
            <article class="card">
                <h3 class="card_titulo"><?= $pelicula->titulo ?></h3>
                <div class="card_body">
                    <img src="imagenes/<?= $pelicula->imagen?>" alt="" class="card_img">
                    <p class="card_text"><?= $pelicula->sipnosis?></p>
                    <p class="card_text card_text-right card_text-bold">Año: <?= $pelicula->anio?></p>
                    <p class="card_text card_text-right card_text-bold"><?= $pelicula->duracion ?> minutos</p>
                    <a href="<?=Config::URL_BASE . "peliculas/info/". $pelicula->id_pelicula ?>">Informacion</a>
                    
                </div>
                <div class="card_footer">
                    <a class="card_link <?= $this->classEnlaces ?>" href="peliculas/delete/<?= $pelicula->id_pelicula ?>">Eliminar</a>
                    <a class=" card_link <?= $this->classEnlaces ?>" href="peliculas/edit/<?= $pelicula->id_pelicula ?>">Editar</a>
                </div>
            </article>
        <?php } ?>
    </div>
    <div class="main-page_nav main-page_nav-flotante">
        <a class="main-page_link <?= $this->classEnlaces ?>" href="<?= $this->url_nuevo ?>">Nuevo</a>
    </div>
</main>