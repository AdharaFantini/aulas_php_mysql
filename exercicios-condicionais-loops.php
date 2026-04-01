<?php
// Crie um sistema para um banco com as seguintes condições abaixo:
// - Identificação do cliente
// - Saldo inicial
// - Pode fazer depósito e mostrar saldo atualizado
// - Pode fazer saque e mostrar saldo atualizado
// - Pode fazer fazer empréstimo parcelo com juros simples de 20% ao ano
// - Pode ver o saldo
// - Tem que sair da conta corrente

$nome = "John Doe";
echo "Nome do cliente: $nome";
echo "<br>------------------------------------------------------------------------------------------------<br>";

$saldoInicial = 100;
if ($saldoInicial > 0) {
    echo "Saldo inicial:" . $saldoInicial;}
echo "<br>------------------------------------------------------------------------------------------------<br>";

echo "Digite 1 para fazer depósito, 2 para fazer saque, 3 para empréstimo parcelado, 4 para ver o saldo atual";


?>


