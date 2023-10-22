<?php

// Aula 20 - Funções
// Na aula de hoje, vamos ver o funcionamento das funções em PHP.
// Vamos criar um programa simples que serve para somar 2 números:

//$n1 = 2;
//$n2 = 2;

//$soma = $n1 + $n2;

//echo "A soma de $n1 e $n2 é igual a: $soma";

// Se eu precisasse repetir esse código eu teria que copiar e colar todo esse bloco durante o programa 
// e isso ia deixar o código muito extenso (além de chato). Para simplificar, vamos utilizar funções:

// Primeiro iremos declarar a função com a palavra function e o nome da função, em seguida vamos definir
// os parâmetros dentro de parênteses.

function soma($n1, $n2){
    $soma = $n1 + $n2;
    echo "A soma de $n1 e $n2 é igual a: $soma</br>";
    return $soma;
}

// Para usar a função, precisamos fazer uma chamada de função (apenas citando o nome da função e definindo os valores que a função terá)

soma(2,2);

// Nesse exemplo, pedimos ao PHP para somar 2+2. Lembrando que a funcão só funciona corretamente se declararmos na mesma quantidade de variáveis de declaramos no inicio da funcão (Ex: 2 variáveis == 2 números, 3 variáveis == 3 números)
// Se colocar menos números da erro e se passar do valor o PHP só considera os primeiros.

// Outro detalhe: Se eu colocar aqui fora do bloco um echo 'soma'; não funciona pois está fora da função (O PHP simplesmente ignora o echo). O código que foi criado na funçõo só funciona nela. Se eu quiser que funcione fora da função, tenho que usar o return dentro da função.

// Usando a função:

# 2 + 3 = x
# y = x + 5

$x = soma(2,3);
$y = soma($x,5);

echo 'O resultado é: '. $y;

// Como podemos ver, o uso da funcão é util na questão da recursividade do código. Essa foi a aula de hoje, muito obrigado por acompanhar e até mais!


