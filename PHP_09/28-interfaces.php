<?php
interface IVolar{
    function volar(int $altura);
}

interface ICorrer{
    function correr(int $velocidad);
}

interface IConducir{
    function frenar();
    function acelerar();
    function encender();
    function apagar();
}

class Coche28 implements IConducir{
    function frenar(){}
    function acelerar(){}
    function encender(){}
    function apagar(){}
}

class Pato28 implements ICorrer, IVolar{
    function volar(int $altura){}
    function correr(int $velocidad){}
}