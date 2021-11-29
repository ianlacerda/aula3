<?php

/*

Consigo imaginar um programa para calcular números primos 
dentro um intervalo

*/


function primos( $menor, $maior ){

    $i;
    $j;
    $teste;
    
        for ($i = $menor; $i <= $maior; $i++) {
        if ($i == 1 || $i == 0)
            continue;


        $teste = 1;

        for ($j = 2; $j <= $i / 2; ++$j) {
            if ($i % $j == 0) {
                $teste = 0;
                break;
            }
        }

        if ($teste == 1)
            echo "{$i} <br>";
    }

}


    
    $menor = 1;
    $maior = 1000;

    Primos($menor, $maior);
