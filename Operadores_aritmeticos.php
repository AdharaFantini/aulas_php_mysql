<?php

// OPERADORES ARITMÉTICOS
$a = 10;
$b = 3;

echo $a + $b , "<br>"; // Soma = 13
echo $a - $b, "<br>"; // Subtração = 7
echo $a * $b, "<br>"; // Multiplicação = 30
echo $a / $b, "<br>"; // Divisão = 3.333...
echo $a % $b, "<br>" ; // Resto da divisão = 1

$c = $a % $b;

echo "Os números abaixo são pares <br>";
for ($i = 0; $i<=20; $i++){

    if ($i % 2 == 0){
        echo $i, "<br>";
    }
}
// OPERADORES RELACIONAIS
// == true se forem iguais
// != true se diferentes
// < true se menor
// > true se maior
// <= true se menor igual
// >= true se maior igual
// === true se iguais em valor e tipo
// !== true se diferentes em valor ou tipo

$a = 10;
$b = "10";

echo "<br>----------------------------------<br>";
echo ($a == $b), "<br>";   // true (valores iguais, tipos diferentes)
echo ($a === $b);  // false (valores iguais, tipos diferentes)


//and true se ambos forem true
//or true se um ou outro forem verdadeiros
//xor se a ou b é true, mas não ambos ao mesmo tempo
//!$a true se a não é true
//&& true se ambos forem true
// || se a ou b é true


$idade = 17;
$tem_carteira = true;

echo "<br>----------------------------------<br>";
if ($idade >= 18 && $tem_carteira) {
    echo "Pode dirigir.";
} else {
    echo "Não pode dirigir.";
}

echo "<br>----------------------------------<br>";
if ($idade >= 18 || $tem_carteira) {
    echo "Pode dirigir.";
} else {
    echo "Não pode dirigir.";
}









