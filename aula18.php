<?php
// Aula 18 - Comando match
// O math é como se fosse o switch, serve para fazer verificações. A verificação do match é para saber
// se o resultado de um código está batendo com o resultado esperado.

// Vamos criar uma variável qualquer:
$x = 1;
// Vamos fazer um exemplo abaixo com o comando match.
// Se a variável acima for igual a 1, será impresso na tela "um", por exemplo.
// Primeiro criamos a variável que irá receber o valor de x.
$nome = match($x){
    1 => 'um',
    2 => 'dois',
    3 => 'três',
    4 => 'quatro',
    5 => 'cinco'
};
// Agora mostramos o resultado da variável nome:
echo $nome;
