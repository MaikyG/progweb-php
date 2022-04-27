<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>

    <style>
        .aprovado{color: purple;}
        .reprovado{color: red;}
        .recuperacao{ color: yellow;}
    </style>

</head>
<body>
    <h1>Condicionais</h1>
    <hr>

    <?php
    $numero = 5 ;
    $outroNumero = 1;
    
    if($numero > $outroNumero){
        echo "<p> $numero é maior que $outroNumero!</p>";
    }
    ?>

    <h2>composta</h2>
    <?php
    $nota1 = 9;
    $nota2 = 8;
    $media = ($nota1 + $nota2) /2;
    echo "<p> Media: $media</p>";

    if ($media >= 7 ){
        echo "<p class=\"aprovado\"> Aporvado </p>";
    } else {
        echo "<p class=\"reprovado\"> Reprovado </p>";
    }
    ?>

    <h2>encadeada</h2>
    <?php
    if ($media >=7) {
        echo "<p class=\"aprovado\">Aprovado</p>";
    } elseif(($media >= 6) && ($media < 7)) {
        echo "<p class=\"recuperacao\">Recuperação</p>";
    } else {
        echo "<p class=\"reprovado\">Reprovado</p>"; 
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

    echo "<p>$assunto</p>";
    ?>
    
</body>
</html>