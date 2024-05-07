<?php

/* Faça um algoritmo que lê um número e verificar se ele é par ou é
ímpar e, também, se ele é negativo, positivo ou neutro. */

$valor = 69;

if($valor < 0) {
    echo  $valor . " é um número negativo ";
} else if($valor > 0){
    echo $valor . " é um número positivo ";
} else {
    echo $valor . " é um número neutro ";
}

if($valor % 2 == 0){
    echo "e é par. <br>";
} else {
    echo "e é impar. <br>";
}


/* Faça um algoritmo que leia um número e mostra se o número é
maior, menor ou igual a 20. */

$n = -30;
if($n > 20){
    echo $n . " é maior que 20.";
} else if($n < 20) {
    echo $n . " é menor que 20.";
} else if($n == 20){
    echo "O número é igual a 20.";
}

echo "<br>";


/* Faça um programa que leia dois valores inteiros. Verifique o maior
deles e imprima na tela o resultado. */

$v1 = 98;
$v2 = -375;

if($v1 > $v2){
    echo $v1 . " é maior que " . $v2;
} else {
    echo $v1 . " é menor que " . $v2;
}

echo "<br>";


/* Faça um programa para solicitar o salário e o valor da prestação. Se a
prestação for maior que 20% do salario, imprimir : “Empréstimo não
pode ser concedido !”. Senão imprimir “Empréstimo Concedido”. */

$salario = 1300;
$prestacao = 700;

if($prestacao > ($salario*0.2)){
    echo "O empréstimo não pode ser concedido! <br>";
} else if($prestacao < ($salario*0.2)){
    echo "O empréstimo foi concedido! <br>";
}


/* Faça um programa que leia três notas de um aluno. Calcule a média
aritmética das notas. Após, escreva na tela se foi aprovado ou
reprovado, caso atinja média igual ou maior a sete. */

$nota1 = 5;
$nota2 = 7;
$nota3 = 9;

$total = ($nota1+$nota2+$nota3);
$media = ($total/3);

if($media >= 7){
    echo "O aluno foi aprovado!";
} else {
    echo "O aluno foi reprovado!";
}

echo "<br>";


/* Desenvolva um Algoritmo que leia 3 números e escreve o maior. */

$f1 = 854;
$f2 = 256;
$f3 = 520;

echo max($f1,$f2,$f3) . " é o número maior, desntre as opções! <br>";


/* Faça um algoritmo que leia dois valores inteiros A e B se os valores
forem iguais deverá se somar os dois, caso contrário multiplique A por
B. Ao final de qualquer um dos cálculos deve-se atribuir o resultado
para uma variável C e mostrar seu conteúdo na tela. */


echo "<br>"

?>