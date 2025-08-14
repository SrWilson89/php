<?php

/**
 * Se lanza cuando hay problemas con la BBDD.
 */
class MySqlDBException extends Exception {
}

/**
 * Conecta a la base de datos
 */
class MySqlDB {
    /**
     * Contine la cadena de conexion a la base de datos.
     */
    const DNS = "mysql:host=localhost;dbname=videojuegos;port=3306;charset=UTF8";
    /**
     * El usuario para conectarse a la BBDD.
     */
    const USUARIO = 'root';
    /**
     * El password del usuario para conectarse a la BBDD.
     */
    const PASS = '';

    /**
     * Contiene el objeto de conexion a la BBDD.
     * @property PDO $db
     */
    public $db;

    /**
     * Inicializa la conexión a la BBDD.
     * 
     * @throws MysqlDBException 
     */
    function __construct() {
        try {
            $conexion = new PDO(self::DNS, self::USUARIO, self::PASS);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $conexion;
        } catch (PDOException $e) {
            throw new MySqlDBException($e->getMessage());
        }
    }

    function __destruct() {
        $this->db = null;
    }

    /**
     * Ejecuta las consultas de tipo INSERT, UPDATE, DELETE
     * 
     * @param string $sql La consulta SQL
     * @param array $params Contiene los valores que se tienen que pasar a la consulta.
     * @return bool
     * @throws MySqlDBException
     */
    function execute(string $sql, array $params = []) {
        $ok = false;
        try {
            $pre = $this->db->prepare($sql);
            $ok = $pre->execute($params);
        } catch (PDOException $e) {
            switch ($e->getCode()) {
                case 23000:
                    switch ($e->errorInfo[1]) {
                        case 1451:
                            throw new MySqlDBException('No se puede eliminar porque esta relacionada con otro dato.');
                            break;
                        case 1062:
                            throw new MySqlDBException('El usuario o el email ya existe.');
                            break;
                        default:
                            throw new MySqlDBException($e->getMessage());
                    }
                default:
                    throw new MySqlDBException($e->getMessage());
            }
        } catch (Exception $e) {
            throw new MySqlDBException($e->getMessage());
        }
        return $ok;
    }

    function prepare(string $sql) {
        return $this->db->prepare($sql);
    }

    function lastInsertId() {
        return $this->db->lastInsertId();
    }

    /**
     * Ejecuta las consultas de tipo SELECT
     * 
     * @param string $sql La consulta SQL
     * @param array $params Contiene los valores que se tienen que pasar a la consulta.
     * @return array
     * @throws MySqlDBException
     */
    function query(string $sql, array $params = []) {
        $ok = false;
        try {
            $pre = $this->db->prepare($sql);
            $ok = $pre->execute($params);
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new MySqlDBException($e->getMessage());
        } catch (Exception $e) {
            throw new MySqlDBException($e->getMessage());
        }
        return $ok;
    }
}
