<?php
# variáveis são espaços na memória onde armazenamos valores variáveis
# inicia-se com o símbolo $ seguindo do nome que eu quero referenciar
# $a = 1200 variáveis salários  
# $salario = 1200 -> não seria melhor?

$texto = "texto comum";
$inteiro = 9;
$casaDecimal = 10.56;
$carros = ["fiat","uno","onix"];


#Debugar - Verificar o que está acontecendo no código
# var_dump();

var_dump($texto);

echo "<br>";

var_dump($inteiro);

echo "<br>";

var_dump($casaDecimal);

echo "<br>";

var_dump($carros);

/*
    TIPOS DE VARIÁVEIS
    $idade -> você espera que o conteúdo seja um número
    $nomeDoAluno -> você espera que o conteúdo seja um texto

    o PHP não necessita da declaração do tipo da variável -
    alguns programadores (principalmente os que usam JAVA) falam
    que o PHP é FRACAMENTE TIPADO

    no JAVA -> int idade = 18;
                String nome = "juan";
                
                nome = 123.55;

                erro, o programa trava

*/


?>