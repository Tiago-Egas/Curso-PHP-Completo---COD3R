<div class="titulo">Valor vs Referência</div>


<?php
$variavel = 'valor inicial';
echo "Atribuindo valor em (variavel): $variavel.<br>";

// Atribuição por valor
$variavelValor = $variavel;
echo "Atribuindo valor em (variavelValor): $variavelValor.<br>";

$variavelValor = 'novo valor';

echo "Atribuindo outro valor em (variavel): $variavel. <br>";
echo "Mostrando novamente a atribuição (variavelValor): $variavelValor<br>";

// Atribuição por referência

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';

echo "Exibindo variável do exemplo anterior (variavel): $variavelReferencia.<br>";
echo "Atribuição por referência (variavelReferencia): $variavelReferencia.<br>";

// a atribuição por referência altera em ambas as variáveis e também no mesmo espaço de memória

?>