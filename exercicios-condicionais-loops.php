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
$deposito = 20;

if ($saldoInicial > 0) {
    echo "Saldo inicial:" . $saldoInicial;}
echo "<br>------------------------------------------------------------------------------------------------<br>";

echo "Digite 1 para fazer depósito, 2 para fazer saque, 3 para empréstimo parcelado, 4 para ver o saldo atual . <br>";

$escolha = 3;

if ($escolha == 1) {
    $deposito = 20;
        $saldoFinal = $saldoInicial - $deposito;

        if ($deposito < $saldoInicial) {
    echo "Saldo pós depósito: " . $saldoFinal;}
        else {
            echo "Depósito superior ao Saldo. Não foi possível realizar o pagamento.";
        }
}

if ($escolha == 2) {
    $saque = 20;
    $saldoSaque = $saldoInicial + $saque;
        echo "Saldo pós saque: " . $saldoSaque;}

if ($escolha == 3) {
    $capital = 30;
    $anos = 4;
    $juros = $capital * 0.20 * $anos;
    $totalpagar = $capital + $juros;
    $saldoFinal = $saldoInicial - $totalpagar;
    echo "Saldo após juros: " . $saldoFinal;}

if ($escolha == 4) {
    echo "Saldo atual: " . $saldoInicial;}

elseif ($escolha >= 5){
    echo "Agradecemos pela preferência.";}


?>


