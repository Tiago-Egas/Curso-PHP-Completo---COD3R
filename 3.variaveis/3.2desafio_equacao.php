<div class="titulo">Desafio Equação</div>

<?php

// calcular resultado de equação

$funcNum1 = pow((6 * (3 + 2)), 2) / (3 * 2);
$funcNum2 = pow((((1 - 5) * (2 - 7)) / 2), 2);
$funcDeno = pow(10, 3);

echo "Transformando equação gráfica em linha de cálculo: ";
/* 
Primeira tentativa de resolver equação
((((6 * (3 + 2)) ** 2) / (3 * 2) - ((((1 - 5) * (2 - 7)) / 2) ** 2) / (10 ** 3);
 */

echo "<p>Testando separar os trechos da equação</p>";
echo "Primeiro: <br> funcNum1 = pow((6 * (3 + 2)), 2) / (3 * 2) = ";
echo pow((6 * (3 + 2)), 2) / (3 * 2) . '<br><br>';
echo "Segundo: <br> funcNum2 = pow((((1 - 5) * (2 - 7)) / 2), 2) = ";
echo pow((((1 - 5) * (2 - 7)) / 2), 2) . '<br><br>';
echo "Somente o topo: <br> pow((funcNum1 - funcNum2), 3) = ";
echo pow(($funcNum1 - $funcNum2), 3) . '<br><br>';
echo "Apenas denominador: <br> funcDeno = pow(10, 3) = ";
echo $funcDeno . '<br><br>';
echo "<p>Fórmula final do desafio:</p>";
echo "(pow((funcNum1 - funcNum2), 3)) / funcDeno = " . (pow(($funcNum1 - $funcNum2), 3)) / $funcDeno . '<br>';

?>