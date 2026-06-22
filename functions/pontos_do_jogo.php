<?php
//criar uma função que avalia o placar de um jogo.
//informar se foi vitória empate ou derrota e quantos pontos o time ganhou.

echo "PLACAR DO JOGO <br>";
function jogo($time1, $time2){
    if($time1 > $time2){
        echo "O time 1 ganhou $time1 pontos e o time 2 ganhou $time2 pontos.<br> O time 1 foi vitorioso :D";
    }
    elseif($time1 < $time2){
        echo "O time 1 ganhou $time1 pontos e o time 2 ganhou $time2 pontos.<br> O time 1 foi derrotado ;-;";
    }
    else{
        echo "O time 1 ganhou $time1 pontos e o time 2 ganhou $time2 pontos.<br> Ocorreu um empate :P";
    }
}
jogo(10,20);
