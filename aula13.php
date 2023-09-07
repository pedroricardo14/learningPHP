<?php

// Aula 13 - Comando for 

// A seguir vamos começar o comando for, nele, não é necessário criar uma variável anteriormente pois ela é criada dentro do laço.

/*
for ($i = 0; $i < 5; $i++) {
    echo 'O valor de $i é: '. $i. '<br>';
}

echo 'Encerrado';

*/ 
// Explicação: variável i recebe 0 de início, para cada item menor que 5, atribua 1 em seu valor.

// Usando arrays com o for

$lista_de_coisas = ['abacate', 'bola', TRUE, 3.14, 10, 1, 2, 3];
/*
for ($i = 0; $i < 5; $i++){
    echo $lista_de_coisas[$i].'<br>';
}
*/
// Ou

for ($i = 0; $i < count($lista_de_coisas); $i++){
    echo $lista_de_coisas[$i].'<br>';
}

