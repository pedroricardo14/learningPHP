<?php

// Aula 9 - Estruturas condicionais


/*


$a = 1000;

//$a = $a + 1; essa mesma expressão pode ser escrita da seguinte forma:

$a++;

// Com laços de repetição, a expressão ++$a terá quase o mesmo sentido que $a++

echo $a;
*/

// Operadores lógicos:

//$a = 11;
//$b = 2;

// Operador módulo(faltou esse na aula passada)

/*
O operador módulo é usado em expressões para resultar o resto de uma divisão. Exemplo:

11 / 2 = 5.5

Quando o módulo é usado, vou ter o resultado por números inteiros. Desse jeito:

Ao invés de 11 / 2 = 5.5, 11 / 2 = 5 com resto 1, pois sobrou 1 nessa conta. 

O módulo resulta somente na sobra.

O módulo é feito com o %

Veja abaixo

*/

//echo $a % $b;

// Resultando em 1.

// Isso é útil se a conta for para saber se um número é par ou impar.

// Veja abaixo:

//echo 11 % 2; // Vai resultar em 1, ou seja, impar.
//echo 10 % 2; // Vai resultar em 0, pois não resta nada e é par.

$a = 102;
$b = 2000;

if($a % 2 == 0 and $a > $b) {
    echo 'É um número par e maior que b.';
}
elseif($a % 2 == 1 and $a > $b) {
    echo 'Impar e maior que b';
}
elseif(($a % 2 == 1) or ($a > $b)) {
    echo 'Impar ou maior que b';
}
elseif(!($a % 2 == 1)){
    echo 'A expressão é falsa.';
}