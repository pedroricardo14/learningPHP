<?php 
// Aula 15 - Comando foreach
// No código de hoje, vamos ver como funciona o comando foreach(para cada) em PHP.
// No comando foreach, teremos uma lista de itens para mostrar na tela, e para cada item da lista, uma ação deve ser feita.

$lista_de_coisas = [1, 2, 3 , 4, 5];

foreach ($lista_de_coisas as $item) {
    echo 'O valor atual de $item é: '.$item.'<br/>';
}
// Explicação:
// Escrevemos a lista, depois declaramos o comando foreach, declaramos no comando qual lista de itens para mostrar,
// declararamos uma variável que seria utilizada para declarar item por item de lista, e por último, fizemos um comando
// para que à cada item da lista de coisas, o php imprimisse o valor atual do item é, o item e uma quebra de linha.
