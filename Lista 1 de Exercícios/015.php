<?php
/* Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
Crie uma função com o nome calculo_media.
Crie validações na função, para que os parâmetros aceitos estejam 
entre 0 e 10.
Crie constantes para os limites ( 0 e 10 ) */
define('valor_max', 10);
define('valor_min', 0);

function calculo_media(float $nota1, float $nota2) : float
{
    if ($nota1 > valor_max || $nota1 < valor_min) {
        echo "A nota deve estar entre 0 e 10!";
        die;
    }

    if ($nota2 > valor_max || $nota2 < valor_min) {
        echo "A nota deve estar entre 0 e 10!";
        die;
    }

    return ($nota1 + $nota2) / 2;
}

function aprovacao(float $media) : void
{
    echo "A média é de: ". $media . '<br>';

    if ($media > 7) {
        echo "Aprovado" .'<br>';
    } elseif ($media > 5) {
        echo "Recuperação" .'<br>';
    } else {
        echo "Reprovado" .'<br>';
    }

    echo '<br>';
}

$nota_1 = 9;
$nota_2 = 4;

$media = calculo_media($nota_1, $nota_2);
aprovacao($media);
?>