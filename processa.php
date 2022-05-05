<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processamento</title>
</head>
<body>
    <h1>processamento de dados</h1>
    <hr>

<?php
if (empty($_POST["nome"]) || empty($_POST["email"])) {
?>
    <p style="color: red "> preencha os campos </p>
    <p><a href="08-formulario.html">voltar</a></p>

 <?php
} else {
    # code...


    //Capturando os dados enviados a partir do formulario
 /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    /* se existir o $_POST['interesses'], o que foi selecionado fica na variavel. caso contrario, deixe um array vazio na variavel
    ?? operador de coalescencia */
    $interesses = $_POST["interesses"] ?? [];
    $informativos = $_POST["informativos"];
    $mensagem = $_POST["mensagem"];
?>
    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Idade: <?=$idade?></li>

        <!-- aqui usamos o operador de negação (!) par inverter a logica da função empty...
            "se interesses não estiver vazio então" -->
         <?php if( !empty($interesses) ){ ?>
        <!-- então faça tudo abaixo -->
        <li>Interesses: 
            <ul>
                <?php foreach($interesses as $interesse ){?>
                <li><?=$interesse?></li>
                 <?php }; ?>
            </ul>
        </li>
         <?php }; ?>
        <li>Informativos: <?=$informativos?></li>
        <li>Mensagem: <?=$mensagem?></li>
      
    </ul>
 <?php }; ?>
</body>
</html>