<div class="titulo">Tipo Caracteres</div>

<?php

echo 'Isto é uma string<br>';
echo var_dump("Isto também"), '<br>';

// concatenação

echo "Nós também" . ' somos', '<br>';
echo ("Número é " . 123), '<br>'; // concatenação de tipos diferentes
echo "Também" . ' aceito', ' vírgulas', '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . '\\';

print("<br>Também existe a função print"); // print com parênteses
print "<br>Também existe a função print"; // print sem parênteses

// Algumas funções

echo '<br>' . strtoupper('maximizado'); // string to upper
echo '<br>' . strtolower('MINIMIZADO'); // string to lower
echo '<br>' . ucfirst('só a primeira letra'); // upper case first
echo '<br>' . ucwords('todas as palavras'); // upper case words
echo '<br>' . strlen('Quantas letras?'); // string lenght
echo '<br>' . strlen('Isto também'); // string lenght
echo '<br>' . mb_strlen('Isto também', 'utf-8'); // mb string lenght
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // part of a string
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // string replacer

?>