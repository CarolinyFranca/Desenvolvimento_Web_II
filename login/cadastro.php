<?php
    if (isset($_POST["CPF"]) || isset($_POST["Nome"])) {
    //isset serve para identificar se a varíavel tem valor
    $arquivo = file_exists("CPF.txt")
    //ver se o arquivo existe
    ? fopen("CPF.txt", "a")
    //abrir arquivo
    : fopen("CPF.txt", "w");
    fwrite($arquivo, $_POST["CPF"]);
    //escrever no arquivo
    fwrite($arquivo, $_POST["Nome"]);
    fclose($arquivo);
    //fechar arquivo
    }
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="Nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="CPF" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>
