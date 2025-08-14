<?php
/*
    Conexion a una base de datos para eliminar filas
*/

try {
    $mbd = new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    echo "Conexion creada<br />";
    $sql = "UPDATE libros
        SET editorial = 'Salamandra', anio = 2005
        WHERE id_libro = 5";
    $resultado = $mbd->exec($sql);
    var_dump($resultado);
    echo "<br />";
    if ($resultado) {
        echo "Producto 10 actualizado.<br/>";
    } else {
        echo "No se ha podido actualizar el producto 10.<br/>";
    }
} catch (PDOException $e) {
    print "¡Error PDO!: " . $e->getMessage() . "<br/>";
} finally {
    $mbd = null;
    echo "Conexion eliminada<br />";
}

?>