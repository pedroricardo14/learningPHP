<?php
// Aula 19 - Include, require, include once e require once

// O include serve para incluir na página dados de outra página. 
// Vamos criar dentro dessa pasta, uma subpasta com arquivos de exemplo para usar o include.

// Para incluir o arquivo de outro local nesse arquivo:

include "./exemplos_aula19/a.php";
include "./exemplos_aula19/b.php";
include "./exemplos_aula19/c.php";
include "./exemplos_aula19/d.php";

// Usamos o include e colocamos o caminho de onde se encontra o arquivo que estamos querendo importar.
// Se colocar um @ antes do include, ele vai tentar incluir o arquivo. Se não conseguir, ele ignora
// (Por exemplo, se fosse solicitado pra incluir o arq e.php, que não existe, ele não mostraria nenhum erro
// Apenas iria ignorar o arquivo e.php)

// O require funciona de forma parecida com o include, mas ao invés de incluir se houver arquvios para incluir,
// é obrigatório incluir o arquivo. Se esse arquivo não existir, dará um erro fatal.
// Usar o @ no require não irá anular o erro fatal, irá anular somente o aviso (warning).

// Vamos ver o require_once:

require_once "./exemplos_aula19/a.php";
require_once "./exemplos_aula19/b.php";
require_once "./exemplos_aula19/c.php";
require_once "./exemplos_aula19/d.php";

// No require_once, estamos dizendo ao PHP que aquele código só pode ser executado uma vez. 
// Se por acaso formos no rquire normal e pedirmos para imprimir novamente algum dos arquivos, ele irá imprimir,
// entretanto, se usarmos o require_once, esse código será executado apenas uma vez, sem repetições.
// No include_once é da mesma forma, só imprime uma vez, lembrando que no include só funciona caso o arquivo exista.
