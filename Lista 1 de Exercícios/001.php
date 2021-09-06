<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
echo $variavel_1 .'<br>';
echo gettype($variavel_1) .'<br>';
// Imprimir o valor a variável e o seu tipo.SS
// gettype é uma função que faz com que seja apresentado o endereço da varíavel e deve sempre ser acompanhado por ().
// .'<br>' serve para quebrar a linha. Ps: br é uma tag html e não do PHP, porém funciona.

$variavel_2 = 123;
echo $variavel_2 .'<br>';
echo gettype($variavel_2) .'<br>';
// Imprimir o valor a variável e o seu tipo

$variavel_3 = 1;
echo $variavel_3 .'<br>';
echo gettype($variavel_3) .'<br>';
// Imprimir o valor a variável e o seu tipo

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array) .'<br>';
echo gettype($array) .'<br>';
// var_dump é uma função que exibe o conteúdo do vetor.
// Imprimir o valor a variável e o seu tipo.

?>