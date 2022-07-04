<?php

const ERRO_NOME_VAZIO = 'Nome não pode ser vazio',
      ERRO_NOME_EXTENSO = 'O nome é muito extenso',
      ERRO_IDADE = 'Idade deve ser um número';

function validarNome(string $nome) : bool {
    if(empty($nome)){
        mensagemDeErro(ERRO_NOME_VAZIO);
        return false;
    }

    else if(strlen($nome) > 40){
        mensagemDeErro(ERRO_NOME_EXTENSO);
        return false;
    }

    return true;
}

function validarIdade(string $idade) : bool {
    if(!is_numeric($idade)){
        mensagemDeErro(ERRO_IDADE);
        return false;
    }

    return true;
}