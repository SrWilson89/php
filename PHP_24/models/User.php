<?php

class User {
    function __construct($id_user, $apodo, $password, $rol) {
        $this->id_user = $id_user;
        $this->apodo = $apodo;
        $this->password = $password;
        $this->rol = $rol;
    }
}