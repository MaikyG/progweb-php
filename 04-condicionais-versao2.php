<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP 2</title>

    <style>
        .aprovado{color: purple;}
        .reprovado{color: red;}
        .recuperacao{ color: yellow;}
    </style>

</head>
<body>
    <h1>Condicionais Versão 2</h1>
    <hr>

    <?php
    $numero = 5 ;
    $outroNumero = 1;
    
    if($numero > $outroNumero){
    ?>
        <p> <?=$numero?> é maior que <?=$outroNumero?>!</p>
    <?php    
    }
    ?>

    <h2>composta</h2>
    <?php
    $nota1 = 9;
    $nota2 = 8;
    $media = ($nota1 + $nota2) /2;
    ?>
    <p> Media: <?=$media?></p>

    <?php
    if ($media >= 7 ){
    ?>
        <p class=aprovado> Aporvado </p>
    <?php
    } else {
    ?>
        <p class=reprovado> Reprovado </p>
    <?php
    }
    ?>

    <h2>encadeada</h2>
    <?php
    if ($media >=7) {
    ?>
        <p class=aprovado>Aprovado</p>
    <?php
    } elseif(($media >= 6) && ($media < 7)) {
    ?>
        <p class=recuperacao>Recuperação</p>
    <?php
    } else {
    ?>
        <p class=reprovado>Reprovado</p>
    <?php
    }    
    ?>

    <h2>switch/case</h2>
    <?php
    $opcao = 4;

    switch ($opcao) {
        case 1:$assunto = "<p> Reclamação </p>"; break;
        case 2:$assunto = "<p> Elogio </p>"; break;
        case 3:$assunto ="<p> Informação </p>"; break;
        default: $assunto = "falar com um humano"; break;
    }
    ?>
    <p><?=$assunto?></p>
    
    
</body>
</html>