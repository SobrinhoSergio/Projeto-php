<?php

function contaVogais($texto){
    $comprimento = mb_strlen($texto);
    $cont = 0;

    for($i = 0; $i < $comprimento; $i++){
        if( $texto[$i] == 'a' || $texto[$i] == 'A' ||
            $texto[$i] == 'e' || $texto[$i] == 'E' ||
            $texto[$i] == 'i' || $texto[$i] == 'I' ||
            $texto[$i] == 'o' || $texto[$i] == 'O' ||
            $texto[$i] == 'u' || $texto[$i] == 'U'
        ){
            $cont++;
        }
        
    }
        return $cont;
}

?>