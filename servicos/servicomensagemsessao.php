<?php

session_start();

const MENSAGEM_DE_ERRO = 'mensagem-de-erro',
      MENSAGEM_DE_SUCESSO = 'mensagem-de-sucesso';

function mensagemDeErro(string $mensagem) : void {
    $_SESSION[MENSAGEM_DE_ERRO] = $mensagem;
}

function obterMensagemDeErro() : ?string {
    if(isset($_SESSION[MENSAGEM_DE_ERRO]))
        return $_SESSION[MENSAGEM_DE_ERRO];

    return null;
}

function mensagemDeSucesso(string $mensagem) : void {
    $_SESSION[MENSAGEM_DE_SUCESSO] = $mensagem;
}

function obterMensagemDeSucesso() : ?string {
    if(isset($_SESSION[MENSAGEM_DE_SUCESSO]))
        return $_SESSION[MENSAGEM_DE_SUCESSO];

    return null;
}

function removerMensagemErro() : void {
    if(isset($_SESSION[MENSAGEM_DE_ERRO]))
        unset($_SESSION[MENSAGEM_DE_ERRO]);
}

function removerMensagemSucesso() : void {
    if(isset($_SESSION[MENSAGEM_DE_SUCESSO]))
        unset($_SESSION[MENSAGEM_DE_SUCESSO]);
}