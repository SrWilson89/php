<h1>Lista de productos</h1>

<?php foreach ($this->productos as $item) { ?>
    <p><?= $item["id"] ?></p>
    <p><?= $item["nombre"] ?></p>
    <p><?= $item["descripcion"] ?></p>
    <hr>
<?php } ?>