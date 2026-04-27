<?php

### 🧩 Exercícios de PHP – Strings

//  Crie uma variável que receba uma frase com ao menos 30 palavras, contando como foi seu final de semana.
//  Resolva as questões abaixo usando essa frase como base
//  Apresente os resultados na tela de forma organizada, contendo o número da pergunta, a pergunta e a resposta.
//
//  1. **Contar caracteres**
//  Crie um script que receba uma string e exiba o número total de caracteres usando `strlen()`.
//
//  2. **Converter para maiúsculas e minúsculas**
//  Dada uma string, exiba:
//
//   * tudo em maiúsculas (`strtoupper()`)
//   * tudo em minúsculas (`strtolower()`)
//
//  3. **Inverter uma string**
//  Receba uma palavra e mostre sua versão invertida usando `strrev()`.
//
//  4. **Verificar se contém uma palavra**
//  Peça uma frase e uma palavra, e verifique se a palavra existe na frase usando `strpos()`.
//
//  5. **Substituir palavras**
//  Substitua uma palavra específica dentro de uma frase usando `str_replace()`.
//
//  6. **Remover espaços extras**
//  Dada uma string com espaços no início e no fim, remova-os usando `trim()`.
//
//  7. **Dividir uma string em array**
//  Transforme uma frase em um array de palavras usando `explode()`.
//
//  8. **Juntar elementos de um array em string**
//  Dado um array de palavras, junte tudo em uma string usando `implode()`.
//
//  9. **Contar palavras em uma frase**
//  Conte quantas palavras existem em uma frase usando `str_word_count()`.
//
//  10. **Capitalizar palavras**
//  Receba uma frase e transforme a primeira letra de cada palavra em maiúscula usando `ucwords()`.

echo '<br>_________________________________________1<br>';
echo '<br>';

echo strlen("Meu final de semana foi ficar em casa descansando e vendo filmes");

echo '<br>';
echo '<br>_________________________________________2<br>';
echo '<br>';

echo (strtoupper("Meu final de semana foi ficar em casa descansando e vendo filmes"));
echo '<br>';
echo (strtolower("Meu final de semana foi ficar em casa descansando e vendo filmes"));

echo '<br>';
echo '<br>_________________________________________3<br>';
echo '<br>';

echo strrev("Meu final de semana foi ficar em casa descansando e vendo filmes");

echo '<br>';
echo '<br>_________________________________________4<br>';
echo '<br>';

echo strpos("Meu final de semana foi ficar em casa descansando e vendo filmes", "casa");

echo '<br>';
echo '<br>_________________________________________5<br>';
echo '<br>';

echo str_replace("Meu final de semana foi ficar em casa descansando e vendo filmes", "séries", "filmes");

echo '<br>';
echo '<br>_________________________________________6<br>';
echo '<br>';

echo trim("Meu final  de semana foi   ficar em casa descansando e    vendo filmes");

echo '<br>';
echo '<br>_________________________________________7<br>';
echo '<br>';

$text = "Meu final de semana foi ficar em casa descansando e vendo filmes";
$y = explode("Meu final de semana foi ficar em casa descansando e vendo filmes", $text);

print_r($y);

echo '<br>';
echo '<br>_________________________________________8<br>';
echo '<br>';

implode("Meu final de semana foi ficar em casa descansando e vendo filmes", $text);

print_r($y);
echo '<br>';
echo '<br>_________________________________________9<br>';
echo '<br>';

echo str_word_count("Meu final de semana foi ficar em casa descansando e vendo filmes");

echo '<br>';
echo '<br>_________________________________________10<br>';
echo '<br>';

echo ucwords("Meu final de semana foi ficar em casa descansando e vendo filmes");