<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Funções no PHP</h1>
    <hr>

    <h2>Funções basicas (sem remoto)</h2>
<?php
function dadosAutor(){
    echo "<div>";
    echo "<p>maiky G.R. Batista</p>";
    echo date("d/m/Y");
    echo "</div>";
}
?>

<section>
    <p>Projeto de Site Back-end</p>
    <?=dadosAutor()?>
</section>

    <h2>Funções com retorno de dados</h2>
<?php
function dadosCurso(){
    return "Programador Web - 240 horas";
}
?>

<p>informaçõe: <?=dadosCurso()?></p>
<p>o Senac Penha tem o Curso <?=dadosCurso()?></p>

    <h2>Funções com parametros/argumentos</h2>

<?php
function soma($valor1, $valor2){
    return $valor1 + $valor2;
}
?>
<p> <?=soma(150,2020)?> </p>
<p> <?=soma(69,515)?> </p>

<?php
$primeiro = 5631151;
$segundo = 1002156;
?>

<p> <?=soma($primeiro,$segundo)?> </p>

<?php
$preco = 1578.99;
$desconto = 75.4789;
$salarioMinimo = 1212;
$novoSalario = 2500.47; 

function forma(float $var, int $casasDecimais=2):float{

return "R$:".number_format( $var, $casasDecimais , "," , ".");

}
?>
    <ul>
        <li>preço <?=forma($preco)?> </li>
        <li>Desconto <?=forma($desconto, 4)?> </li>
        <li>Salario minimo <?=forma($salarioMinimo)?> </li>
        <li>Novo salario <?=forma($novoSalario)?> </li>
    </ul>

    <h2>indução de tipos de dados</h2>
<?php
function calculaMedia( float $nota1, float $nota2):float{
    return($nota1 + $nota2)/2;
}
?>

<p><?=calculaMedia(10, 5)?></p>
<p><?=calculaMedia(5.5, 7.7)?></p>
<p><?=calculaMedia(9.84, 3.41)?></p>
</body>
</html>