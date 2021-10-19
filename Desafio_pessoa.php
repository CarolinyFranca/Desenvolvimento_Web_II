<?php

class Pessoa
{ 
	public $nome; 
	public $idade; 
	public $nacionalidade; 
	 
	public function __construct($nome, $idade, $nacionalidade) 
	{ 
        $this->nome = $nome; 
        $this->idade = $idade; 
        $this->nacionalidade = $nacionalidade; 
	} 
} 
 
$pessoa1 = new Pessoa('Graziele', 10, 'Brasileira'); 

$pessoa2 = new Pessoa('Bento', 15, 'Britânico'); 

$pessoa3 = new Pessoa('Jennifer', 20, 'Israelense');

$pessoa4 = new Pessoa('Matheus', 25, 'Peruano'); 

$pessoa5 = new Pessoa('Agatha', 30, 'Espanhola'); 

var_dump($pessoa1) .'<br>'; 

var_dump($pessoa2) .'<br>';

var_dump($pessoa3) .'<br>';

var_dump($pessoa4) .'<br>';

var_dump($pessoa5) .'<br>';

?>