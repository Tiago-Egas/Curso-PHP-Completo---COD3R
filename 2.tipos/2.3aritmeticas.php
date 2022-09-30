<div class="titulo">Operações Aritméticas</div>

<?php

# formas de realizar operações aritméticas e conhecendo os operadores suportados

echo "Soma (1 + 1) = ", 1 + 1, '<br>';
echo "Soma e tipo (var_dump(1 + 1)) = ", var_dump(1 + 1), '<br>';
echo "Soma Real (1 + 2.3) = ", 1 + 2.3, '<br>';
echo "Subtração (10 - 2) = ", 10 - 2, '<br>';
echo "Multiplicação (3 * 4) = ", 3 * 4, '<br>';
echo "Divisão (11 / 2) = ", 11 / 2, '<br>';
echo "Divisão inteira (intdiv(11, 2)) = ", intdiv(11, 2), '<br>';
echo "Arredondamento inteira(round(11 / 2)) = ", round(11 / 2), '<br>';
echo "Resto divisão (9 % 5) = ", 9 % 5, '<br>';
echo "Resto divisão (Par ou Ímpar) (9 % 2) = ", 9 % 2, '<br>';
echo "Dividindo por zero (7 / 0) = ", /* 7 / 0 */ "PHP 8 causa erro ao fazer divisão por zero", '<br>';
echo "Exponenciação (4 ** 2) = ", 4 ** 2, '<br>'; // de outra forma pode ser usado pow(4, 2)

// precedência de operadores: 
// () => ** => / * % => + -

echo '<p>Exemplificando as precedência</p>';

echo "2 + 3 * 4 = ", 2 + 3 * 4, '<br>';
echo "(2 + 3) * 4 = ", (2 + 3) * 4, '<br>';
echo "2 + 3 * 4 ** 2 = ", 2 + 3 * 4 ** 2, '<br>';
echo "((2 + 3) * 4) ** 2 = ", ((2 + 3) * 4) ** 2, '<br>';

?>