<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
<?php

$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$mensagem = $_POST['mensagem'];

//sanitize
$nome = filter_input( INPUT_POST , 'nome', FILTER_SANITIZE_SPECIAL_CHARS );


?>
<p>Nome:<?=$nome?></p>
<p>Fabricante:<?=$fabricante?></p>
<p>Preço:<?=$preco?></p>
<p>Quantidade:<?=$quantidade?></p>
<p>Mensagem:<?=$mensagem?></p>
</body>
</html>