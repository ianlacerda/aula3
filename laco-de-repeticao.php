<?php

/*
    while - enquanto algo for verdadeiro faça
    while (condição é verdadeira)
    {
        faça o que está aqui
    }
    for - para uma condição até um resultado faça

*/


$i = 1;

while($i <= 10){
    echo "{$i} - Vou arrebentar no PHP <br>";
    $i++;
}

echo "<hr>";
echo "<h2>Minha Tabuada</h2>";

$i = 1;
$num = 5;

while($i <= 10){
    echo "{$i} x {$num} =".$i * 3;
    echo "<br>";
    $i++;
}