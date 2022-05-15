<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 exercicio</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <div>

        <p>
<?php 
//sanitize
//$nome = filter_input(INPUT_POST,"nome" , FILTER_SANITIZE_SPECIAL_CHARS);
?>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome">

        </p>
        </div>

        <div>
<?php
$fabricantes = array ("Ferrari","Mercedes","Alpine","Honda")
?>
            <p>Fabricantes!!!</p>
                <select name="fabricante" id="fabricante">
<?php foreach ($fabricantes as $fabricante){ ?>
                <option value="<?=$fabricante?>"><?=$fabricante?></option>
<?php }; ?>
                </select>   
        </div>

        <div>

            <label for="preco">Preço</label><br>
            <input type="number" name="preco" id="preco" min="100" max="10000">
        </div>

        <div>
            <label for="quantidade">Quantidade</label><br>
            <input type="number" name="quantidade" id="quantidade" min="0" max="50">
        </div>

        <div>
            <label for="mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </div>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
    
</body>
</html>