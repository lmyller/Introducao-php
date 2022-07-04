<?php

session_start();

function mensagemDeErro(string $mensagem) : void {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemDeErro() : ?string {
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];

    return null;
}

function mensagemDeSucesso(string $mensagem) : void {
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemDeSucesso() : ?string {
    if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];

    return null;
}

function removerMensagemErro() : void {
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}

function removerMensagemSucesso() : void {
    if(isset($_SESSION['mensagem-de-sucesso']))
        unset($_SESSION['mensagem-de-sucesso']);
}