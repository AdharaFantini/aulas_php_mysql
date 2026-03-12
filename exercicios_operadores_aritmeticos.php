<?php
// EXERCÍCIO 1
// Calcule a média aritmética de três notas
// e exiba o resultado.
$nota1 = 10;
$nota2 = 9;
$nota3 = 8;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média é " . number_format($media, 2) . "<br>";
// EXERCÍCIO 2
// Converta um valor em reais para dólares,
// considerando a cotação de USD = R$ 5,20
// "A média é " . number_format($media, 2);
$valorReal = 100;
$cotacao = 5.20;

$valorConvertido = $valorReal / $cotacao;

echo "O valor convertido é R$ " . number_format($valorConvertido, 2) . "<br>";


// EXERCÍCIO 3
// Calcule a área do círculo (A = pi * r^2)
$raio = 100;
$pi = 3.1415;

$area = $pi * $raio * $raio;

echo "A área do círculo é " . $area . " metros<br>";

