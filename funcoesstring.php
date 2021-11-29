<?php

// repete string
echo str_repeat(".OoOo", 10);

echo "<hr>";
#caixa alta
$nome = "juan pablo";
echo strtoupper($nome);

echo "<hr>";

#lower-Case
echo strtolower("HOJE ESTAMOS APRENDENDO DIVERSAS FUNÇÕES");

# trocar texto - str_replace

echo "<hr>";

$texto = "O rei rico de Roma";
echo str_replace("rei", "rainha", $texto);

#primeira letra maiúscula
echo "<hr>";

$func = "ian lacerda";
echo ucfirst($func);
echo "<hr>";
echo ucwords($func); //Toda primeira letra

echo "<hr>";

# Usuário digita o conteúdo tudo errado

$aluno = "iAn lAcErdA"; // maiúsculas e minúsculas invertidas

echo ucwords(strtolower($aluno));

echo "<br>";



?>