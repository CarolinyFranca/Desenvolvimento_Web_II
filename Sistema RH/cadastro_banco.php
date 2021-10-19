<?php
    require_once "pdo.php";
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $data = $_POST["datacontratacao"];

    $registrar = new registrar();
    $registrar->pdo->exec('INSERT INTO funcionario (nome, cargo, datacontratacao) VALUES ("' . $nome . '","' . $cargo . '","' . $data . '")');

?>