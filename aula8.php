<?php

// Aula 8 - Estruturas condicionais

$a = 1001;

$b = 100;

/*
if($a == $b){
    echo 'Valores iguais';
} */

/*
if($a === $b){
    echo 'Valores iguais';
}
elseif($a == $b){
    echo 'Valores iguais, mas não do mesmo tipo.';
}
else {
    echo 'Valores diferentes';
}*/

if($a < $b){
    echo 'a maior que b';
}
elseif($a > 0){
    echo 'a maior que 0';
}
