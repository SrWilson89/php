<main class="main-page">
    <h2 class="main-page_titulo">Productos</h2>
    <form action="" method="GET">
        <div>
            <input type="text" name="busqueda" id="busqueda" placeholder="Escribe una palabra">
            <input type="submit" value="Buscar" name="buscar">
        </div>
    </form>
    <div>
        <?php for ($i = 1; $i <= $this->paginas; $i++) { ?>
            <a href="<?= Config::URL_BASE . '/productos?page=' . $i ?>"><?= $i ?></a>
        <?php } ?>
    </div>
    <div class="card-container">
        <?php foreach ($this->productos as $producto) { ?>
            <article class="card">
                <h3 class="card_titulo"><?= $producto->nombre ?></h3>
                <div class="card_body">
                    <p class="card_text"><?= $producto->descripcion ?></p>
                    <p class="card_text card_text-right card_text-bold"><?= $producto->precio ?> €</p>
                </div>
                <div class="card_footer">
                    <a class="card_link" href='productos/info/<?= $producto->id ?>'>Info</a>
                    <a class="card_link <?= $this->classEnlaces ?>" href="productos/delete/<?= $producto->id ?>"">Eliminar</a>
                    <a class=" card_link <?= $this->classEnlaces ?>" href="productos/edit/<?= $producto->id ?>">Editar</a>
                    <a class="card_link <?= $this->classComprarEnlace ?>" href="carrito/add/<?= $producto->id ?>">Añadir al carrito</a>
                </div>
            </article>
        <?php } ?>
    </div>
    <div class="main-page_nav main-page_nav-flotante">
        <a class="main-page_link <?= $this->classEnlaces ?>" href="<?= $this->url_nuevo ?>">Nuevo</a>
    </div>
</main>