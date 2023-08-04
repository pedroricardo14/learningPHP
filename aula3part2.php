<?php 

$nome = "Pedro";

$head = "<!DOCTYPE html>
<html>
<head>
  
    <title>Esse é o site de $nome</title>
</head>";

$body =" <body>
    <h1>Olá! Meu nome é $nome</h1>
    <p>Estudando PHP</p>
</body>
</html>";

$html = $head . $body;
echo $html;
