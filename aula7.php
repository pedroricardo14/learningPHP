<?php 
// Aula 7 - Arrays

// Há duas formas de criar uma array:

//$prateleira = array();

// Ou de forma mais simples:

$prateleira = [1, 2, 3, 4, 5];
// Dessa forma de impressão não dá certo nesse caso pois o echo não imprime arrays por completo.
//echo $prateleira;

// Para imprimir uma array com o echo, deve-se usar a posição do item que desejo imprimir.
//echo $prateleira[0];

// Réplica da array para mais exemplos.
$prateleira1 = ['o', 'l', 'á', '!', ' ', 'mundo', 1, 2, 3, 4, 5, TRUE, FALSE, 3.14];

echo $prateleira1[0];
echo $prateleira1[1];
echo $prateleira1[2];
echo $prateleira1[3];
echo $prateleira1[4];
echo $prateleira1[5];

print_r($prateleira1);
var_dump($prateleira1);

// Criando uma array associativa

$exemplo = ['a'=>'abacate', 'b'=>'bola', 'c'=>'cachorro'];

// Para acessar um item de uma array associativa, ao ivés de chamar a posição do item, escrevemos a chave de acesso ao item

echo $exemplo['a'];
echo 'O '. $exemplo['c']. ' brincou com a '. $exemplo['b'];
