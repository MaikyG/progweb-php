<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>
    <h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH!</h1>

    <h2>encadeada</h2>
    <?php
    $salario = 400;
    
    if ($salario < 500) {
        $salarioNovo = $salario * 1.15;
    } elseif ($salario <= 1000 ) {
        $salarioNovo = $salario * 1.10;
    } else {
        $salarioNovo = $salario * 1.05;

    }
     echo "<p> $salarioNovo</p>"
    ?>
    
</body>
</html>