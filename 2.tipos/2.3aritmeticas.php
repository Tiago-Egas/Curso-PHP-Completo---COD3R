<div class="titulo">Operações Aritméticas</div>

<?php

echo "Soma = ", 1 + 1, '<br>';
echo "Soma e tipo = ", var_dump(1 + 1), '<br>';
echo "Soma Real = ", 1 + 2.3, '<br>';
echo "Subtração = ", 10 - 2, '<br>';
echo "Multiplicação = ", 3 * 4, '<br>';
echo "Divisão = ", 11 / 2, '<br>';
echo "Divisão inteira = ", intdiv(11, 2), '<br>';
echo "Arredondamento inteira = ", round(11 / 2), '<br>';
echo "Resto divisão = ", 9 % 5, '<br>';
echo "Resto divisão (Par ou Ímpar) = ", 9 % 2, '<br>';
echo "Dividindo por zero = ", /* 7 / 0 */ "PHP 8 causa erro ao fazer divisão por zero", '<br>';
echo "Exponenciação = ", 4 ** 2, '<br>';

// precedência de operadores: 
// () => ** => / * % => + -

echo '<p>Precedência</p>';

echo "2 + 3 * 4 = ", 2 + 3 * 4, '<br>';
echo "(2 + 3) * 4 = ", (2 + 3) * 4, '<br>';
echo "2 + 3 * 4 ** 2 = ", 2 + 3 * 4 ** 2, '<br>';
echo "((2 + 3) * 4) ** 2 = ", ((2 + 3) * 4) ** 2, '<br>';

?>