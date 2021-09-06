<?php
    if (isset($_POST["senha"])) {
    $_POST["senha"];
    $senha = "carol123";
    if ($senha == $_POST["senha"]){
        echo "Senha Correta!" . '<br>';
    }else{
        echo "Senha Incorreta! Tente Novamente." . '<br>';
    }   
}
?>