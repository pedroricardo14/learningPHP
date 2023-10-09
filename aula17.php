<?php
// Aula 17 - Comando Switch 
// Basicamente, esse comando serve para simplificar várias condições (if e elseif, por exemplo) seguidas.

$estados = ['rn', 'sc', 'sp', 'rj', 'mg', 'ms', 'pe', 'pr'];


foreach ($estados as $estado) {
    //echo $estado . '<br/>';
    // Aqui ao invés de escrever:
    // if ($estado == 'rn') {
    // echo 'Rio grande do Norte';
    // }  
    // e repetir isso pra cada estado, fazemos o seguinte:
    echo '<br/>';
    switch ($estado) {
       case 'rn': echo 'Rio Grande do Norte'; break;
       case 'sc': echo 'Santa Catarina'; break;
       case'sp': echo 'São Paulo'; break;
       case 'rj': echo 'Rio de Janeiro'; break;
       case'mg': echo 'Minas Gerais'; break;
       case'ms': echo 'Mato Grosso do Sul'; break;
       case 'pe': echo 'Pernambuco'; break;
       case 'pr': echo 'Paraná'; break; 
    }

}