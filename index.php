<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulário</h1>
    <form action="script.php" method="post">
        <?php
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDeSucesso))
                echo $mensagemDeSucesso;
            
            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemDeErro))
                echo $mensagemDeErro;
        ?>
        <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
        <p><label for="idade">Idade: </label><input type="text" name="idade" id="idade"></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>