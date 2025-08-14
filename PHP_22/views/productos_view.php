<h1>Productos</h1>

<?php foreach ($this->productos as $item) { ?>
    <h2><?= $item["nombre"] ?></h2>
    <p><?= $item["descripcion"] ?></p>
    <p>Stock: <?= $item["stock"] ?></p>
    <hr>
<?php } ?>

<h2><a href="http://localhost/PHP/PHP_22/productos/nuevo">Nuevo producto</a></h2>

<a href="http://localhost/PHP/PHP_22/pagina1">1</a>
<a href="http://localhost/PHP/PHP_22/pagina2">2</a>
<a href="http://localhost/PHP/PHP_22/pagina3">3</a>