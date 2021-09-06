<?php
/*
Crie uma função que demonstre 
 - Passagem por valor.
 - Passagem por referência.
 
*/
function soma_valor(int $numero): int
{
    return $numero + 1;
}

function soma_referencia(int &$numero): void
{
    $numero += 1;
}

$numero_manipulado = 1;

echo "Número: ". $numero_manipulado . '<br>';

$soma = soma_valor($numero_manipulado);

echo 'Soma por valor: ' . $soma . '<br>';
echo 'Número com soma por valor: ' . $numero_manipulado . '<br>';

soma_referencia($numero_manipulado);

echo 'Número com soma por referência: ' . $numero_manipulado . '<br>';

?>