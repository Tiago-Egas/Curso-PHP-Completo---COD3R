<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuções';

// Operações com operadores infix
echo "<p>Operações Infix</p>";

$num = 10; // Atribuição inicial
echo "Atribuindo valor na variável num: " . $num . '<br>';

$num = $num - 2;
echo "Alteração na variável (num - 2): " . $num . '<br>';
$num = $num - 1.90;
echo "Alteração na variável (num - 1.90): " . $num . '<br>';

// Incrementos e decrementos unários
echo "<p>Incrementos e Decrementos Unárias</p>";

$num++;                                                         // $num = $num + 1
echo "Incremento pós fixado (num++): " . $num . '<br>';
$num--;                                                         // $num = $num - 1
echo "Decremento pós fixado (num++): " . $num . '<br>';
++$num;
echo "Incremento pré fixado (--num): " . $num . '<br>';
--$num;
echo "Decremento pré fixado (--num): " . $num . '<br>';

// Operadores unários
echo "<p>Operações Unárias</p>";

$num = 32; // Nova atribuição para outros exemplos
echo "Reatribuindo valor em num: " . $num . '<br>';

$num -= 8;
echo "Subtração unária (num -= 8): " . $num . '<br>';
$num += 40;
echo "Adição unária (num += 40): " . $num . '<br>';
$num /= 8;
echo "Divisão unária (num /= 8): " . $num . '<br>';
$num *= 0.25;
echo "Multiplicação unária (num *= 0.25): " . $num . '<br>';
$num **= 7;
echo "Exponenciação unária (num **= 5): " . $num . '<br>';

// Funciona com concatenação
echo "<p>Concatenações de textos com operações unárias</p>";
$lorem = 'Lorem ipsum';
echo "Gerando texto (lorem): " . $lorem . '<br>';
$lorem = $lorem . ' dolor sit';
echo "Juntando textos (lorem . ' dolor sit'): " . $lorem . '<br>';
$lorem .= ' amet.';
echo "Completando o texto (lorem .= ' amet.'): " . $lorem . '<br>';

// Valor Default
// $variavelInexistente = 'valor existente';
echo "Crise existencial em curso (variavelInexistente): " /* . $variavelInexistente */ . '<br>';
$valencia = $variavelInexistente ?? 'Valor padronizado';
echo "Crise existencial a todo vapor (Valor padronizado): " . $valencia . '<br>';


?>