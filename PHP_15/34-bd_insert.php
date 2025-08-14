<?php
/*
    Conexion a una base de datos para insertar filas
*/

try {
    $mbd = new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    echo "Conexion creada<br />";
    $sql = "INSERT INTO libros (titulo, anio, editorial, descripción)
    VALUES ('Los pilares de la tierra', 2000,'Raizer', 'mucho texto')";
    $resultado = $mbd->exec($sql);
    var_dump($resultado);
    echo "<br />";
    if ($resultado) {
        echo "Ultimo ID insertado " . $mbd->lastInsertId() . "<br />";
    }
} catch (PDOException $e) {
    print "¡Error PDO!: " . $e->getMessage() . "<br/>";
} catch (ErrorException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
} finally {
    $mbd = null;
    echo "Conexion eliminada<br />";
}

?>