<div class="titulo">Desafio Caracteres</div>

<?php
/* 
Enunciado:

Avaliando os métodos da documentação da string, qual o método que a
posição do texto 'abc' na string '!AbcaBcabc' retorne 1?

 */

$phrase = '!AbcaBcabc';
$tofind = 'abc';

echo "Encontrar 'abc' dentro da string '!AbcaBcabc': ";
echo "Encontrado? ";
if (stripos($phrase, $tofind) == 1)
    echo "Sim.";
echo '<br>';
echo '<br>';
echo "Utilizando stripos($phrase, $tofind)."


?>