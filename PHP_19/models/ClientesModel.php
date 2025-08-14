<?php

class ClientesModel {
    function __construct() {
        $this->cnx = new MySqlDB();
    }

    function getClientes() {
        $sql = "SELECT * FROM clientes";
        $data = $this->cnx->query($sql);
        return $data;
    }

    function getCliente(string $id_cliente) {
        $sql = "SELECT * FROM clientes WHERE id_cliente = ?";
        $data = $this->cnx->query($sql, [$id_cliente]);
        return empty($data) ? null : new Cliente($data[0]);
    }

    function getClienteByIdUsuario(string $id_usuario) {
        $sql = "SELECT * FROM clientes WHERE id_usuario = ?";
        $data = $this->cnx->query($sql, [$id_usuario]);
        return empty($data) ? null : new Cliente($data[0]);
    }

    function createCliente(Cliente $cliente) {
        $sql = "INSERT INTO clientes (nombre, apellidos, direccion, 
        telefono, email, id_usuario) 
        VALUES (?,?,?,?,?,?)";
        $params = [
            $cliente->nombre,
            $cliente->apellidos,
            $cliente->direccion,
            $cliente->telefono,
            $cliente->email,
            $cliente->idUsuario
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok ? $this->cnx->lastInsertId() : false;
    }

    function updateCliente(Cliente $cliente) {
        $sql = "UPDATE clientes SET nombre = ?, apellidos = ?, 
        direccion = ?, telefono=?, email=?, id_usuario=?
        WHERE id_cliente=?";
        $params = [
            $cliente->nombre,
            $cliente->apellidos,
            $cliente->direccion,
            $cliente->telefono,
            $cliente->email,
            $cliente->idUsuario,
            $cliente->id
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function deleteCliente(int $id_cliente) {
        $sql = "DELETE FROM clientes WHERE id_cliente=?";
        $ok = $this->cnx->execute($sql, [$id_cliente]);
        return $ok;
    }
}
