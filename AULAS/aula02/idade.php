<?php

$idade = readline("Digite sua idade: ");

    if(is_numeric($idade)){
        
        if($idade>=65){
            echo "Idoso com mais de 65 anos.";
        }
        elseif($idade>=18){
            echo "Adulto com mais de 18 anos.";
        }
        else{
            echo "Menor de idade.";
        }

    }
    
    else{
        exit("Digite um número.");
    }
?>