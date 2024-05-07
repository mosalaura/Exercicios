<?php

$lauraMosa = [
    "nome" => "Laura",
    "idade" => 22,
    "endereco" => "R. dos Alfeneiros.",
    "e-mail" => "mosalauraslim@gmail.com",
    "status" => "casadinha"
];

// print_r($lauraMosa); esta funcção mostrará tudo que há dentro da variável array.

/* echo $lauraMosa["nome"];
echo "<br>";
echo $lauraMosa["idade"];
echo "<br>";
echo $lauraMosa["status"];
echo "<br>"; */

$lauraMosa["status"] = "solteira";
echo $lauraMosa["status"];


$trabson = [
    "trabnome" => "Cinética",
    "trabchefe" => "Igru"
];

echo "<br>";

$tudo = $lauraMosa + $trabson;
print_r($tudo);

echo "<br>";





?>