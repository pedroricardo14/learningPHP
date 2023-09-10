<?php
// Aula 14 - Comando for decremental
// Vamos aprender como decrementar um valor de uma lista através do laço for
// Primeiro criamos a lista
$lista_de_coisas = [1, 2, 3, 4, 5];

// Para decrementar, vamos iniciar o for com a contagem de itens que há na lista e diminuir 1
// O php retornará o valor 5 (qtd de itens da lista) e diminuirá 1
// Será então definido que o $i inicial (pois está de trás pra frente) terá que ser maior ou igual a 0
// Por último, iremos escrever $i--, para que haja decremento e o código não retorne um erro.
for ($i = count($lista_de_coisas) - 1; $i >= 0; $i--) {
    echo $lista_de_coisas[$i] .'<br>';
}
