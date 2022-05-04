<?php 
const ESCOLA = "Senac";
$curso = "Programador Web";
$tecnologia = ["HTML","CSS","JavaScript","PHP"];

function verificaIdade(int $valor):string{
    if($valor >= 18){
        return "maior";
    } else {
        return "menor";
    };
}  