<?php

// Aula 11 - Operador ternário

// Funciona da seguinte forma:

// $variavel = (expressão) ? faça x : faça y;

// Explicação do código acima: Temos uma variável, essa variável irá receber uma expressão, se essa expressão for verdadeira, faça x, se não for verdadeira, faça y.

// Como ficaria um código sem o operador ternário:

// Descobrindo se um número é par ou ímpar

/*

$n = 10;
$tipo = '';
if ($n % 2 == 0) {
    $tipo = 'par';
}
else{
    $tipo = 'ímpar';
}

echo $tipo;

*/

// Agora, o código abaixo será o mesmo escrito acima com o operador ternário, ou seja, de foma mais simplificada.


$n = 11;

//$tipo = $n % 2 == 0 ? 'par' : 'ímpar';

$tipo = !($n > 0) ? 'Negativo' : 'Positivo';

echo $tipo;