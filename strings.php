<?php
////  É UMA SEQUENCIA DE CARACTERES
////  É CERCADA POR ASPAS DUPLAS OU SIMPLES
//
//echo "Hello folks";
//echo '<br>_________________________________________<br>';
//
////   HÁ DIFERENÇA ENTRE AS DUAS
////   Uma string entre aspas duplas substituirá o valor das variáveis e aceita muitos caracteres especiais, como \n, \r, \t,.
//
//echo "Exemplo: <br>";
//
//$x = "John Doe";
//echo "Hello $x";
//echo '<br>_________________________________________<br>';
//
////// AS ASPAS SIMPLES NÃO SUBSTITUEM O VALOR DAS VARIÁVEIS
////// IMPRIME A STRING COMO ELA FOI ESCRITA
////
//$x = "John Doe";
//echo 'Hello $x= ' . $x;
//echo '<br>_________________________________________<br>';
//
//////  FUNÇÕES COM STRING
////// STRLEN() RETORNA O TAMANHO DA STRING
//
//echo "strlen() = ". strlen("Hello Folks!");
//echo '<br>_________________________________________<br>';
//
//// STR_WORD_COUNT conta o núumero de palavras em uma string
//echo  "str_word_count = " . str_word_count("Is that all Folks!");
//echo '<br>_________________________________________<br>';
//
//// STR_CONTAINS verifica se a string contém uma substring específica
//// RETORNA TRUE OU FALSE
//$txt = "Is that all folks!";
//var_dump(str_contains($txt, "all"));
//echo "<br>str_contains = " . str_contains($txt, "all");
//echo '<br>_________________________________________<br>';
//var_dump(str_contains($txt, "boy"));
//echo "<br>str_contains = " . str_contains($txt, "boy");
//
//
//echo '<br>_________________________________________<br>';
//// STRPOS procura por um texto específico dentro de uma string
//// Se encontrado, retorna a posição do primeiro caractere do primeiro correspondente
//echo strpos($txt, "folks");
//echo '<br>_________________________________________<br>';

// STR_STARTS_WITH()
// Verifica se a string começa com a referida substring
// Se um correspondente é encontrado, retorna true
// A função é 'case sensitive'

//$txt_2 = "I really love you!";
//var_dump(str_starts_with($txt_2, "I really"));
//echo '<br>_________________________________________<br>';
//
//var_dump(str_starts_with($txt_2, "i really"));
//echo '<br>_________________________________________<br>';

// STR_ENDS_WITH()
// Verifica se a string termina com a referida substring
// Se um correspondente é encontrado, retorna true
// A função é 'case sensitive'

$txt_2 = "I really love you!";
//var_dump(str_ends_with($txt_2, "you!"));
//echo '<br>_________________________________________<br>';

var_dump(str_ends_with($txt_2, "You!"));
echo '<br>_________________________________________<br>';

////  STRREV inverte a string
//
$text_3 = "I really love you!";
echo strrev($text_3);
echo '<br>_________________________________________<br>';
//
// TRIM
// remove qualquer espaço em branco do início e do fim da frase

$text_4 = "     I do love you!     ";
echo "<br>" . strlen($text_4);
echo "<br>" .$text_4;
echo "<br>". trim($text_4);

echo '<br>_________________________________________<br>';
//
// EXPLODE divide uma string em uma array

$text_5 = "I love you too much!";
$y = explode(" ", $text_5);

print_r($y);
echo '<br>_________________________________________<br>';
//
//// STRING CONCATENATION
//// PARA CONCATENAR utilize . (ponto)

$text_6 = "I don't wanna be your baby!";
$text_7 = "I wanna be your lover!";
echo $text_6 . $text_7 . "<br>";
echo $text_6 . " " . $text_7 . "<br>";
echo "$text_6 $text_7";
echo '<br>_________________________________________<br>';

// SUBSTR -> FATIA UMA STRING
// É usado para extrair uma parte de uma string
// Especifique o índice inicial e o número de caracteres que você quer que retorne

$text_8 = "Your kiss is one of the best things in my life!";
echo $text_8 . "<br>";
echo substr($text_8, 0, 10) . "<br>";

//
// Tirando o último parâmetro , a faixa irá até o final.
echo substr($text_8, 12) . "<br>";

// Use índice negativo irá começar a dividir do final para o início
echo substr($text_8, -5, 8) . "<br>";
//
// Use tamanho negativo para especificar quantos caracteres omitir, começando do final da string
echo substr($text_8, 5, -3) . "<br>";

//ESCAPE CHARACTERS
// Para inserir caracteres que são ilegais em uma string use um caracter de fuga
$text_9 = 'And they could "never" tears us apart. I make wine from your tears.';
echo $text_9;
