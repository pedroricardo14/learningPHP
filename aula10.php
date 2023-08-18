<?php

// Aula 10 - Sintaxe alternativa do comando if

$n = 11;

//echo $n;

// Usando o comando normal

/*

if($n % 2 == 0){
    echo 'Número par.';
}
else{
    echo 'Número impar';
}*/

// Intercalando códigos php com html

// Veja como fica na forma bagunçada:


/*

if($n % 2 == 0){ ?>
    <p style="color: blue;">Número par</p> 
<?php }
else{ ?>
    <p style="color: red;"></p>Número impar</p>
<?php } ?>
*/

// Agora veja de forma organizada e alternativa com endif.

/*
if($n % 2 == 0):
    echo 'Número par.';
else:
    echo 'Número ímpar';
endif;
*/

// Agora usando a alternativa do endif com HTML
?>


<?php if($n % 2 == 0): ?>
    <p>Número par</p>
<?php else: ?>
    <p>Número ímpar</p>
<?php endif; ?>

