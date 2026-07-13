<?php
//Criar uma função que recebe um número e uma unidade de temperatura
//A primeira unidade é a atual
//A segunda unidade é para a qual se quer converter
//Trabalhar com Kelvin, Celcius, Fahrenheit e Réamur
//Pesquisem  as fórmulas de conversão

echo "Digite seu número, a unidade de medida do número colocado e a unidade para qual será convertida (K, C, F, Re)";
function converterTemp($numero, $unidade1, $unidade2)
{
    if ($unidade1 == $unidade2) {
        echo "<br> Não há conversão de unidades de medida iguais";
    } else {

        if ($unidade1 == "C" && $unidade2 == "K") {
            $convercao = $numero + 273.15;
            echo "<br> Seu valor em Celcius é $convercao";
        } elseif
        ($unidade1 == "C" && $unidade2 == "F") {
            $convercao = $numero * 1.8 + 32;
            echo "<br> Seu valor em Celcius é $convercao";
        } elseif
        ($unidade1 == "C" && $unidade2 == "Re") {
            $convercao = $numero * 0.8;
            echo "<br> Seu valor em Celcius é $convercao";
        }

        elseif
        ($unidade1 == "K" && $unidade2 == "C") {
            $convercao = $numero - 273.15;
            echo "<br> Seu valor em Kelvin é $convercao";
        } elseif
        ($unidade1 == "K" && $unidade2 == "F") {
            $convercao = $numero - 459.67;
            echo "<br> Seu valor em Kelvin é $convercao";
        } elseif
        ($unidade1 == "K" && $unidade2 == "Re") {
            $convercao = ($numero - 273.15) * 0.8;
            echo "<br> Seu valor em Kelvin é $convercao";
        }

        elseif
        ($unidade1 == "F" && $unidade2 == "C") {
            $convercao = ($numero - 32) / 1.8;
            echo "<br> Seu valor em Fahrenheit é $convercao";
        } elseif
        ($unidade1 == "F" && $unidade2 == "K") {
            $convercao = ($numero - 32) * 5 / 9 + 273.15;
            echo "<br> Seu valor em Fahrenheit é $convercao";
        } elseif
        ($unidade1 == "F" && $unidade2 == "Re") {
            $convercao = ($numero - 32) * 4 / 9;
            echo "<br> Seu valor em Fahrenheit é $convercao";
        }

        elseif
        ($unidade1 == "Re" && $unidade2 == "C") {
            $convercao = $numero * 5 / 4;
            echo "<br> Seu valor em Kelvin é $convercao";
        } elseif
        ($unidade1 == "Re" && $unidade2 == "F") {
            $convercao = ($numero * 2.25) + 32;
            echo "<br> Seu valor em Kelvin é $convercao";
        } elseif
        ($unidade1 == "Re" && $unidade2 == "K") {
            $convercao = $numero * 1.25 + 273.15;
            echo "<br> Seu valor em Kelvin é $convercao";
        }
    }

}
converterTemp(0, "C", "F");

?>

