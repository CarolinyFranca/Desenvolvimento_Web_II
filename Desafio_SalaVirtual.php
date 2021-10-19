<?php

class SalaVirtual
{ 
	public $alunos; 
	public $professor; 
	public $representante; 
	 
	public function __construct($alunos, $professor, $representante) 
	{ 
        $this->alunos = $alunos; 
        $this->professor = $professor; 
        $this->representante = $representante; 
	} 
} 
 
$SalaVirtual1 = new SalaVirtual(10, 'Jorge', 'Valéria'); 

$SalaVirtual2 = new SalaVirtual(15, 'Cristina', 'Fernando'); 

$SalaVirtual3 = new SalaVirtual(20, 'Bento', 'Francisca');

var_dump($SalaVirtual1) .'<br>'; 

var_dump($SalaVirtual2) .'<br>';

var_dump($SalaVirtual3) .'<br>';

?>