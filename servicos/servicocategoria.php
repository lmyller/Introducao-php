<?php

const INFANTIL = 'infantil',
      ADOLESCENTE = 'adolescente',
      ADULTO = 'adulto';


function categoriaCompetidor(string $nome, string $idade){
    $categorias = [];
    $categorias[] = INFANTIL;
    $categorias[] = ADOLESCENTE;
    $categorias[] = ADULTO;
    
    if(validarNome($nome) && validarIdade($idade)){
        removerMensagemErro();

        if($idade >= 6 && $idade <= 12){
            for($indice = 0; $indice < count($categorias); $indice++)
                if($categorias[$indice] === INFANTIL){
                    mensagemDeSucesso('O atleta '.$nome.' compete na categoria '.$categorias[$indice]);
                    return null;
                }
        }
        
        else if($idade >= 13 && $idade <= 17){
            for($indice = 0; $indice < count($categorias); $indice++)
                if($categorias[$indice] === ADOLESCENTE){
                    mensagemDeSucesso('O atleta '.$nome.' compete na categoria '.$categorias[$indice]);
                    return null;    
                }
        }
        
        else{
            for($indice = 0; $indice < count($categorias); $indice++){
                if($categorias[$indice] === ADULTO){
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