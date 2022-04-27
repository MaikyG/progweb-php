<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio arrays</title>
    <style>
        article {
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
    $pessoaA = [ 
        "nome" => "leclerc",
        "idade" => 24,
        "email" => "leclecrScuderiaFerrari@gamil.com",
        "sexo" => "masculino"
    ];

    $pessoaB = [
        "nome" => "verstappen",
        "idade" => 24,
        "email" => "maxverstappenrbr@gmail.com",
        "sexo" => "masculino",
    ]
    ?>

    <!-- const pessoa = ["verstappen", 25, "maxverstappenrbr@gmail.com", "masculino"] -->
 <article>

    <h2> <?=$pessoaA ["nome"]?> e um piloto da Scuderia Ferrari e tem <?=$pessoaA ["idade"]?> e esse email <?=$pessoaA ["email"]?> e ficticio , e so para completar o exercicio </h2>

    <h2><?=$pessoaB ["nome"]?> e um piloto da RedBull Racing e tem <?=$pessoaB ["idade"]?> e esse email <?=$pessoaB ["email"]?> e ficticio , e so para completar o exercicio</h2>

    </article>
</body>
</html>