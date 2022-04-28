<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops em PHP</title>
</head>
<body>
    <h1>Loops</h1>
    <hr>

    <h2>while (enquanto)</h2>
<?php
$i = 1;
while ($i < 4) {
?>
    <p><?=$i?></p>
<?php
$i++;
}
?>

    <h2>do/while</h2>

<?php
$j = 1;
do{
?>
    <div style="border: solid 1px" >
        <h3> exemplo <?=$j?> </h3>
    </div>
<?php
    $j++;
} while($j < 6);
?>

    <h2>for(para)</h2>
<?php
for ($i=1; $i <4 ; $i++) { 
?>
    <p>valor de i é <b><?=$i?></p>
<?php
}
?>

    <h1>exercicio</h1>
<?php
$meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro" , "dezembro",];

for ($i=0; $meses < 13 ; $i++) { 
?>

<ol><?=$meses?></ol>

<?php
}
?>

    
</body>
</html>