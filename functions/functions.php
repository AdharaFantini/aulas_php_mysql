<?php
function functions($parametro1, $parametro2)
{
    //codigo a ser executado
    return true;
}

function myMessage(){
    echo"O mundo está calmo aqui";
}
//chamando a função
myMessage();

function familyName($name){
    echo "$name Baudelaire<br>";
}
echo "<br>";
familyName("Violet");
familyName("Klaus");
familyName("Sunny");
familyName("Beatrice");
familyName("Bertrand");
familyName("Beatrice II");

echo "<br>";
function familyNameBorn($name,$year){
    echo "$name Baudelaire . Nascid@ em $year. <br>";
}
familyNameBorn("Violet", 1986);
familyNameBorn("Klaus", 1988);
familyNameBorn("sunny", 2000);
familyNameBorn("Beatrice", 1937);
familyNameBorn("Bertrand", 1934);
familyNameBorn("Beatrice II", 2003);

echo "<br>";
function idade($idade){
    if($idade <= 12){
        echo "Você tem $idade anos. Ainda é criança";
    }
    elseif($idade <= 19){
        echo "Você tem $idade anos. Você é adolecente";
    }
    elseif($idade <= 60){
        echo "Você tem $idade anos. Você é adulto";
    }
    elseif($idade <= 100){
        echo "Você tem $idade anos. Você é idoso";
    }
    else{
        echo "Você tem $idade anos. Como tu ainda tá vivo?";
    }
}

idade(100);

