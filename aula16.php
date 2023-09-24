<?php
// Aula 16 - Cláusula break e continue
// Na aula de hoje, vamos ver como funciona os comandos break e continue em que PHP.
// Vamos exemplificar para melhor entendimento:
// Nesse exemplo, temos uma lista de números de 1 até 10, precisamos parar a contágem quando
// o número for igual a 5:

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
/*
foreach ($lista as $i) {
    echo $i.'<br>';

    if ($i == 5){
        break;
    }
    
}
echo '[encerrado]';
*/
// vimos acima que o comando break funciona, mas veja o que acontece se o break ficasse antes do echo:
/*
foreach ($lista as $i) {
    if ($i == 5){
        break;
    }
    echo $i.'<br>';
}
echo '[encerrado]';
*/
// Você viu que dessa vez, só foi impresso do número 1 ao 4, isso aconteceu porque o echo, quando
// estava antes do if, dizia para o php mostrar todos os números que o comando do bloco iria executar em seguida, agora,
// o echo está depois, ou seja, estamos dizendo ao php: primeiro execute o bloco, depois mostre o resultado.

// Agora o comando continue:

/*
foreach ($lista as $i) {
    if ($i == 5){
        continue;
    }
    echo $i.'<br>';
}
echo '[encerrado]';
*/
// No continue, estamos dizendo ao php: Execute o echo na lista, se o item que você achar for igual a 5, você
// deve executar o bloco novamente, pulando o número 5, que é o número que há na condição if(Se o $i for igual a 5)

// Vamos de exemplo:

// Imprimindo apenas os números ímpares da lista:

foreach ($lista as $i){
    if ($i % 2 == 0){
        continue; 
        // Se fosse usando o break, o php iria achar o 1 como número ímpar e ia parar o bloco ali mesmo.
    }
    echo $i.'<br/>';
}

// Até mais!

