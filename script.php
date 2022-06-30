<?php

/* Declarando variáveis */
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
 
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'Nome não pode ser vazio';
    return;
}

if(strlen($nome) > 40){
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade)){
    echo 'Idade deve ser um número';
    return;
}

/* Verificar tipo de dados */
//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($indice = 0; $indice < count($categorias); $indice++)
        if($categorias[$indice] === 'infantil')
            echo 'infantil';
}

else if($idade >= 13 && $idade <= 17){
    for($indice = 0; $indice < count($categorias); $indice++)
        if($categorias[$indice] === 'adolescente')
            echo 'adolescente';
}

else
    echo 'adulto';


    