<?php

function categoriaCompetidor(string $nome, string $idade){
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    
    if(validarNome($nome) && validarIdade($idade)){
        removerMensagemErro();

        if($idade >= 6 && $idade <= 12){
            for($indice = 0; $indice < count($categorias); $indice++)
                if($categorias[$indice] === 'infantil'){
                    mensagemDeSucesso('O atleta '.$nome.' compete na categoria '.$categorias[$indice]);
                    return null;
                }
        }
        
        else if($idade >= 13 && $idade <= 17){
            for($indice = 0; $indice < count($categorias); $indice++)
                if($categorias[$indice] === 'adolescente'){
                    mensagemDeSucesso('O atleta '.$nome.' compete na categoria '.$categorias[$indice]);
                    return null;    
                }
        }
        
        else{
            for($indice = 0; $indice < count($categorias); $indice++){
                if($categorias[$indice] === 'adulto'){
                    mensagemDeSucesso('O atleta '.$nome.' compete na categoria '.$categorias[$indice]);
                    return null;    
                }
            }
        }  
    } 
    else{
        removerMensagemSucesso();
        obterMensagemDeErro();
    }
}