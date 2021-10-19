<?php

class registrar
{
    public PDO $pdo;

    public function __construct()
    {

        $dsn = "mysql:host=localhost;dbname=empresaphp";

        $usuario = "root";
        $senha = "";
        
        $this->pdo = new PDO($dsn, $usuario, $senha);

        $this->pdo->setAttribute
        (PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    }
}    

?>