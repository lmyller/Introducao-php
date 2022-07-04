<?php

include 'servicos/servicocategoria.php';
include 'servicos/servicomensagemsessao.php';
include 'servicos/servicovalidacao.php';

/* Declarando variáveis */
$nome = $_POST['nome'];
$idade = $_POST['idade'];

/* Verificar tipo de dados */
//var_dump($nome);
//var_dump($idade);

categoriaCompetidor($nome, $idade);

header('location: index.php');



    