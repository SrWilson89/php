<?php

function bbddQuery(String $sql)
{
    $cnn = new PDO("mysql:host=localhost;dbname=biblioteca", "root");
    $resul = $cnn->query($sql);
    $data = $resul->fetchAll(PDO::FETCH_ASSOC);
    $cnn = null;
    return $data;
}

function bbddExecute(String $sql)
{
    $cnn = new PDO("mysql:host=localhost;dbname=biblioteca", "root");
    return $cnn->exec($sql);
}
