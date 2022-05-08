<?php

/* Faça um programa que pegue a função contaVogais do arquivo vogais.php e crie uma constante contendo algumas frutas e veja qual fruta tem mais vogais.*/

require_once 'vogais.php';

const FRUTAS = ['banana', 'abacate', 'laranja', 'melancia', 'mamao', 'goiaba', 'pera', 'pessego', 'uva', 'manga', 'acerola', 'coco', 'caju', 'Pupuassuuuu'];


function maisVogais($valores){

    $contagem = count($valores);
    $maior = 0;
    $maiorValor = '';

    for($i = 0; $i < $contagem; $i++){
        $elemento = $valores[$i];
        $atual = contaVogais(FRUTAS[$i]);
        
        if($atual > $maior){
            $maior = $atual;
            $maiorValor = $elemento;
        }
    }
    return $maiorValor;

}

echo 'A fruta com mais vogais é: '.maisVogais(FRUTAS);

?>