<?php
/*
Descubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 
Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 150;

echo $numero .'<br>';

if ((int)$numero%10==0) {
    echo "É divisível por 10" .'<br>';
} else{
    echo "Não é divisível por 10" .'<br>';
}

if ((int)$numero%3==0) {
    echo "É divisível por 3" .'<br>';
} else{
    echo "Não é divisível por 3" .'<br>';
}
?>