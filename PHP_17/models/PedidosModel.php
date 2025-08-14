<?php

class PedidosModel {
    function __construct() {
        $this->cnx = new MySqlDB();
    }

    function getPedidosPendientes() {
        $sql = "SELECT * FROM pedidos WHERE estado <> 'entregado'";
        $data = $this->cnx->query($sql);
        $pedidos =  $this->converAsocToObj($data);
        return $pedidos;
    }

    function getPedidoPendientessByIdUsuario(string $id_usuario) {
        $sql = "SELECT * FROM pedidos 
                INNER JOIN cliente ON cliente.id_cliente = pedidos.id_cliente  
                WHERE cliente.id_usuario = ? AND estado <> 'entregado'";
        $data = $this->cnx->query($sql, [$id_usuario]);
        return $this->converAsocToObj($data);
    }

    function crearPedido(string $id_cliente) {
        $sql = "INSERT INTO pedidos (id_cliente, estado) 
                VALUES (?,?)";
        $params = [$id_cliente, "pagado"];
        $ok = $this->cnx->execute($sql, $params);
        return $ok ? $this->cnx->lastInsertId() : false;
    }

    function addProductosPedido(string $id_pedido, array $carrito) {
        if (!empty($carrito)) {
            $sql = "INSERT INTO pedidos_productos 
                (id_pedido, Id_producto, cantidad) 
                VALUES ";
            $params = [];
            for ($i = 1; $i <= count($carrito); $i++) {
                $sql .= "(?,?,?)";
                if ($i < count($carrito)) {
                    $sql .= ", ";
                }
                $params[] = $id_pedido;
                $params[] = $carrito[$i - 1]["id"];
                $params[] = $carrito[$i - 1]["cantidad"];
            }
        }
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    /**
     * Convierte un array de elemtos asociativos a un
     * array de objetos pedidos.
     */
    function converAsocToObj(array $asocs) {
        $objs = [];
        foreach ($asocs as $asoc) {
            $objs[] = new Pedido($asoc);
        }
        return $objs;
    }
}
