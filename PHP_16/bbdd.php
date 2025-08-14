<?php

function bbddExecute(String $sql){
    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    return $cnn->exec($sql);
}

function bbddQuery(String $sql)
{
    $cnn = new PDO("mysql:host=localhost;dbname=biblioteca", "root");
    $resul = $cnn->query($sql);
    $data = $resul->fetchAll(PDO::FETCH_ASSOC);
    $cnn = null;
    return $data;
}