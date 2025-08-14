<?php
/*
    Conexion a una base de datos para eliminar filas
*/

try {
    $mbd = new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    echo "Conexion creada<br />";
    $sql = "DELETE FROM libros WHERE id_libro = 1";
    $resultado = $mbd->exec($sql);
    var_dump($resultado);
    echo "<br />";
    if ($resultado) {
        echo "Producto eliminado.<br/>";
    } else {
        echo "No se ha podido eliminar el producto.<br/>";
    }
} catch (PDOException $e) {
    print "¡Error PDO!: " . $e->getMessage() . "<br/>";
} finally {
    $mbd = null;
    echo "Conexion eliminada<br />";
}

?>