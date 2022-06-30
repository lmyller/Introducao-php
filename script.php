<?php

session_start();

/* Declarando variáveis */
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
 
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'Nome não pode ser vazio';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Idade deve ser um número';
    header('location: index.php');
    return;
}

/* Verificar tipo de dados */
//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($indice = 0; $indice < count($categorias); $indice++)
        if($categorias[$indice] === 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.' compete na categoria '.$categorias[$indice];
            header('location: index.php');
            return;
        }
}

else if($idade >= 13 && $idade <= 17){
    for($indice = 0; $indice < count($categorias); $indice++)
        if($categorias[$indice] === 'adolescente'){
            $_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.'compete na categoria '.$categorias[$indice];
            header('location: index.php');
            return;    
        }
}

else{
    $_SESSION['mensagem-de-sucesso'] = 'O atleta '.$nome.'compete na categoria '.$categorias[$indice];
    header('location: index.php');
    return;    
}


    