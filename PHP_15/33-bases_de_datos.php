<?php
/*
    Conexion a una base de datos
*/

try {
    $mbd = new PDO('mysql:host=localhost;dbname=tienda;port=3306', 'root');
    echo "Conexion creada<br />";
    $resultado = $mbd->query('SELECT * from productos');
    echo "Hay " . $resultado->rowCount() . " productos:<br />";
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $fila) {
        echo $fila["nombre"] . " " . $fila["precio"];
        echo "<br />";
    }
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
} finally {
    $mbd = null;
    echo "Conexion eliminada<br />";
}

?>