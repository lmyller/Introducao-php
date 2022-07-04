<?php

include 'servicos/servicocategoria.php';
include 'servicos/servicomensagemsessao.php';
include 'servicos/servicovalidacao.php';

const NOME = 'nome',
      IDADE = 'idade';

/* Declarando variáveis */
$nome = $_POST[NOME];
$idade = $_POST[IDADE];

/* Verificar tipo de dados */
//var_dump($nome);
//var_dump($idade);

categoriaCompetidor($nome, $idade);

header('location: index.php');



    