<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

if ($a > $b && $a > $c){
    echo "Maior: " .$a;
} if ($b > $a && $b > $c){
    echo "Maior: " .$b;
} else{
    echo "Maior: " .$c;
}
?>