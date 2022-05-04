<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h1>Inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?></p>

    <ul>
<?php
foreach($tecnologia as $tec){
?>
<li><?=$tec?></li>
<?php
};
?>
    </ul>
    <p>Chapolin Colorado tem 20 anos e é
        <b><?=verificaIdade(20)?></b> de idade</p>
    <p>Chaves tem 8 anos e é
        <b><?=verificaIdade(8)?></b> de idade</p>
    <hr>

    <article>
        <h2>Conteudo qualquer...</h2>
        <?php require "textos.php" ?>
    </article>

     
        
    
</body>
</html>