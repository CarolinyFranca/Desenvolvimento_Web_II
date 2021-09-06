<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
Crie uma função com o nome calculo_media.
*/

$nota_1 = 9;
$nota_2 = 4;

function calculo_media($nota1, $nota2)
{
    return ($nota1 + $nota2) / 2;
}

$media = calculo_media($nota_1, $nota_2);

echo "A média é de: ". $media . '<br>';

if ($media > 7) {
    echo "Aprovado";
} elseif ($media > 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>