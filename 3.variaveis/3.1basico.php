<div class="titulo">Variáveis</div>

<?php

$numA = 41;
echo "Imprimindo variável alocada (numA): " . $numA . '<br>';
echo "Conferindo tipo da variável: " . var_dump($numA) . '<br>';

$t = 9;
$i = 14;
$soma = $t + $i;

echo "Soma de t(9) com i(14): " . $soma . '<br>';
echo "Conferir se uma variável está alocada com isset: " . isset($soma) . '<br>';
unset($soma); // unset funciona mas ao executar o PHP avisa sobre variárvel nula
echo "Remoção de valor da memória com unset: " . var_dump($soma) . '<br>';

echo "<p>Exemplo de tipagem fraca do PHP</p>";
$a = 27;
echo "Usando variável (a) 1x: " . $a . '<br>';
$a = "Var de string!";
echo "Usando variável (a) 2x: " . $a . '<br>';

echo "<p>Nomeclaturas permitidas no PHP</p>";
$var = 'válida!';
$var2 = 'válida também!';
$Var3 = "ainda é válida!";
$_var_4 = "continua válida!";

echo "var: " . $var . '<br>';
echo "var2: " . $var2 . '<br>';
echo "Var3: " . $Var3 . '<br>';
echo "_var_4: " . $_var_4 . '<br>';

echo "<p>Nomeclaturas não recomendadas no PHP</p>";
echo "Exemplos: " . '<br>';
echo "vâr, com acentos." . '<br>';
echo "4var, començando com números." . '<br>';
echo "var8%, utilizando caracteres especias" . '<br>';
echo "_GET, variáveis da linguagem." . '<br>';

?>