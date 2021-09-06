<?php
/* Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. 
Caso o número estiver fora do intervalo, informar que não existe o mês.
Utilize array. */
$meses = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro',
];

$mes = $_GET['mes'];

if ($mes < 1 || $mes > 12) {
    echo "Não existe um mês correspondente. P.s: apenas números entre 1 e 12.";
    die;
}

echo $meses[$mes - 1];
?>