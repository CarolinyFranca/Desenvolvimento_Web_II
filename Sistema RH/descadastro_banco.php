<?php
    require_once "pdo.php";
    $id = $_POST["idfunc"];
    $data = $_POST["datademissao"];

    $registrar = new registrar();
    $registrar->pdo->exec('UPDATE funcionario SET datademissao = "' . $data . '" WHERE idfunc = "' . $id . '"');

?>