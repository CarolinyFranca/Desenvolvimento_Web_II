<?php
/* Importar a função criada em 014_a.php para ser utilizada aqui.

$nota_1 = 9;
$nota_2 = 4;
// Calcular chamando a função

$nota_1 = 1;
$nota_2 = 5;
// Calcular chamando a função

$nota_1 = 5;
$nota_2 = 3;
// Calcular chamando a função */
require_once '011 e 012.php';

$nota_1 = 9;
$nota_2 = 4;
$media = calculo_media($nota_1, $nota_2);
aprovacao($media);

$nota_1 = 1;
$nota_2 = 5;
$media = calculo_media($nota_1, $nota_2);
aprovacao($media);


$nota_1 = 5;
$nota_2 = 3;
$media = calculo_media($nota_1, $nota_2);
aprovacao($media);
?>