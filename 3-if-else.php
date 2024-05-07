<?php

// if = se
// else = se não
// else if = se não, se (algua coisa)...

/*
Faça um algoritmo que leia um número e mostrar se ele é positivo ou
negativo. 
*/

$n = 8;
if($n < 0) {
    echo "O número " . $n . " é negativo! <br>";
} else { 
    echo "O número " . $n . " é positivo! <br>";
}

/*
Faça um algoritmo que leia um número e mostrar se ele é positivo,
negativo ou igual a zero. 
*/

$numero = 0;
if($numero < 0) {
    echo "O número " . $numero . " é negativo! <br>";
} else if($numero > 0) {
    echo "O número " . $numero . " é positivo! <br>";
} else if($numero == 0) {
    echo "O número " . $numero . " é neutro! <br>";
}


?>