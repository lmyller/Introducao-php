<?php

function validarNome(string $nome) : bool {
    if(empty($nome)){
        mensagemDeErro('Nome não pode ser vazio');
        return false;
    }

    else if(strlen($nome) > 40){
        mensagemDeErro('O nome é muito extenso');
        return false;
    }

    return true;
}

function validarIdade(string $idade) : bool {
    if(!is_numeric($idade)){
        mensagemDeErro('Idade deve ser um número');
        return false;
    }

    return true;
}