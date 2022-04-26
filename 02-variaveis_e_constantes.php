<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis e constantes</title>
</head>
<body>
    <h1>manipulando dados na memoria</h1>
    <hr>

    <?php
    //variaveis
    $curso = "programação web";
    $ano = 2022;
    $preco = 2500.42;

    echo "<h2>saida de dado completa</h2>";
    echo '<p>$curso</p>';
    echo "<p>$curso</p>";
    echo "<p>$ano</p>";
    echo "<p><b>$preco<b></p>";   
    ?>

    <h2>Sainda de dados intercalando HTML e PHP</h2>
    <p><?php echo $curso ?></p>
    <p> <?=$curso?> </p>
    <p> <?=$ano?> </p>
    <p> <?=$preco?></p>
     <!-- sinrax abreviada de saida -->

     <?php
     //constantes
     // forma 1:
        define("MEU_NOME", "Maiky");
     // forma 2:
        const ESCOLA = "Senac Penha";
        echo "<p>".MEU_NOME."</p>";
        echo "<p>".ESCOLA."</p>";
    ?>

    <p> <?=MEU_NOME?> </p>
    <p> <?=ESCOLA?> </p>


</body>
</html>