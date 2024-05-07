<?php

// lista de exercícios 2: 

/*
1. Escreva um algoritmo que tenha como entrada o número de horas que um
funcionário trabalhou e o valor da hora trabalhada. O algoritmo deverá
calcular e escrever o salário que este funcionário irá receber. 
*/

$horas = 80;
$valor = 20;

$salario = $horas*$valor;

echo "O salário do Cab de Pika é R$" . $salario . "<br>";


/*
2. Escreva um algoritmo que leia dois valores numéricos inteiros,
armazenando-os em duas variáveis (a e b). O algoritmo deverá trocar o valor
das duas variáveis, de tal forma que em a fique armazenado o valor de b e
vice-versa. Ao final, o algoritmo deverá escrever os valores de a e b. 
*/

$a = 10;
$b = 20;

$c = $a;
$a = $b;
$b = $c;

echo "O novo valor de a é: " . $a . "<br>";
echo "O novo valor de b é: " . $b . "<br>";


/*
3. Escreva um algoritmo para calcular e informar o valor de conversão para
graus centígrados de uma temperatura em graus Fahrenheit, sabendo que
C=(5*(F-32))/9. 
*/

$F = 78;
$resultado = (5*($F-32))/9;
$reduzNumero = number_format($resultado, 2, '.', ''); 
// a variável $reduzNumero serviu apenas para deixar 2 númeroas após a vírgula.
echo $F . " graus Fahrenheit é equivalente a " . $reduzNumero . " graus Celcius.";
echo "<br>";


/*
5. Escreva um algoritmo que leia dois valores numéricos do tipo inteiro e
escreva o resultado da soma dos quadrados destes números e o resultado da
divisão dos dois valores. 
*/

$a = 200;
$b = 50;

echo "Resultado da soma dos quadrados = " . (($a*$a) + ($b*$b)) . "<br>";
echo "Resultado da divisão dos quadrados = " . (($a*$a) / ($b*$b)) . "<br>";


/*
6. Faça um algoritmo para calcular e escrever a tabuada até 5 de um número
lido. 
*/

$x = 2;
echo "1 x $x = " . $x*1 . "<br>";
echo "2 x $x = " . $x*2 . "<br>";
echo "3 x $x = " . $x*3 . "<br>";
echo "4 x $x = " . $x*4 . "<br>";
echo "5 x $x = " . $x*5 . "<br>";

// outra forma de fazer este cálculo é usando a função for. Por exemplo:

$x = 2;
for($i = 1; $i <= 5; $i++){

echo "$i x $x = " . $i*$x . "<br>";

} 


/*
7. Ler um valor inteiro e escrever seu antecessor e seu sucessor. 
*/

$a = 5;
echo "Sucessor " . ($a+1) . "<br>";
echo "Antecessor " . ($a-1) . "<br>";


/*
8. Escreva um algoritmo para ler o raio de um círculo, calcular e escrever a
sua área. 
*/

$raio = 102;
echo "A área de um círculo, cujo o raio é igual a " . $raio . " é: " . (pow($raio, 2)*3.14) . "<br>";


/*
9. Escreva um algoritmo para ler as dimensões de uma cozinha retangular
(comprimento, largura e altura). Calcular e escrever a quantidade de caixas
de azulejos para se colocar em todas as suas paredes (considere que não será
descontada a área ocupada por portas e janelas). Cada caixa de azulejos possui
1,5 m2. 
*/

$c = 10;
$l = 7;
$a = 4;
$resultado = (($c*$l)+($c*$a));
$reduzNumero = number_format($resultado/1.5, 2, '.', ''); 
// a variável $reduzNumero serviu apenas para deixar 2 númeroas após a vírgula.
echo "A cozinha tem " . $resultado . "m², logo, vamos precisar de " . $reduzNumero . " caixas de azulejo. <br>";


/*
10. Escreva um algoritmo que leia a distância percorrida por um automóvel
(em km) e o intervalo de tempo utilizado para percorrer essa distância (em
horas). Calcule e escreva a velocidade média no percurso em km/h. 
*/

$d = 50;
$t = 2;
$v = ($d/$t);
echo "A velocidade média percorrida é de " . $v . " km/h. <br>";


?>