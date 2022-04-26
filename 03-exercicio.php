<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>
    <?php
    //variaveis
    $data = date("d/m/Y");
    $nome = "Maiky";
    $idade = date("Y") - 2003;
    $cidade = "São Paulo";

    echo "<p> hoje é $data. $nome tem $idade anos e mora em $cidade  </p>";

     ?>

     <p> hoje é <?=$data?>. <?=$nome?> tem <?=$idade?> anos e mora em <?=$cidade?> </p>

     
</body>
</html>