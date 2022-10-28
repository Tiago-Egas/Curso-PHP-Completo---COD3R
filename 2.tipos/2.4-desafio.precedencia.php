<div class="titulo">Desafio Precedência</div>

<?php


echo "1. Qual é o resultado de 2 + 5 * + (12 / 6) / (-8 + 2 ** 3)? <br>";
// echo "Resultado é = ", 2 + 5 * + (12 / 6) / (-8 + 2 ** 3), "<br>"; // erro divisão por zero não permitida
echo "R = Cálculo tende ao infinito, erro em Divisão por Zero!";

echo "<p> 2. Qual expressão imprime o valor 100?</p>";
echo "a) ", (1 + 2)  * 20 - 15, "<br>";
echo "b) ", 4 * 5 ** 2, " => Correta <br>"; // essa imprime 100
echo "c) ", 2 ** 3 ** 4 / 1.e25, "<br>";
echo "d) ", 3 + (3 * 18) / 2 - 3, "<br>";

?>