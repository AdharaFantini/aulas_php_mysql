<?php

//Criando Arrays//

echo "Meu array <br>";
$meuArray = array ('Volvo', 15, ["maçãs", "bananas"]);
var_dump($meuArray);
echo "<br>";


echo "Meu segundo array <br>";
$meuSegundoArray = ['Volvo', 15, ["maçãs", "bananas"]];
var_dump($meuSegundoArray);
echo "<br>";

echo "<br>";
//Declarando array vazio
$danganrompa = [];
$danganrompa["Louco"] = "Nagito";
$danganrompa["Mentiroso"] = "Kokishi";
$danganrompa["Sádico"] = "Monokuma";
var_dump($danganrompa);

echo "<br><br>Arrays indexados: <br>";
$carros = array("Volvo", "BMW", "Toyota");
echo "<br>";
var_dump($carros);
echo "<br><br>";
echo "Acessando item do array: <br>";
echo "Posição" [0];

echo "Arrays Associativas: <br>";
$epic = array("Nome" => "Odisseu", "Anos" => 7, "Cargo" => "Rei de Ítaca");
var_dump($epic);

echo "<br><br>";
echo "Acessando item do array: <br>";
echo $epic["Nome"];

echo "<br>Trocando item de uma array<br>";
$epic["Anos"] = 20;