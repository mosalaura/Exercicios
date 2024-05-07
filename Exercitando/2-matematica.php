<?php

// crie um algorítimo que calcule 30% de 55 e exiba em tela.

$numero = 100;
$resultado = $numero*0.3;

echo $resultado;
echo "<br>";

// pegue o resultado e multiplique por 700 e exiba em tela
echo $resultado*700;
$novoresultado = $resultado*700;
echo "<br>";

// descubra quanto é 15% deste novo resultado e exiba em tela
echo $novoresultado*0.15;
echo "<br>";

// pegue o último resultado e subtraia com o primeiro resultado e exiba em tela
echo ($novoresultado*0.15)-$resultado;
echo "<br>";



?>