<div class="titulo">Interpolação</div>

<?php

// impressão de variável conforme visto anteriormente
$num = 9.6;
echo "Impressão de variável concatenando texto: " . $num . '.<br>';

// testando impressão de variável dentro de string
echo 'Com aspas simples: $num.<br>'; // não funciona
echo "Com aspas duplas: $num.<br>"; // funciona

// agora utilizando imporpolação na string para emitir o valor da variável
echo "Impressão de variável dentro da string ($num)." . '<br>';

// outro exemplo utilizando variável dentro de variável
$texto = "Sua nota é: $num.";
echo "$texto<br>";

$obj = 'caneta';
// echo "Tenho 5 $objs." . '<br>'; // interpretador PHP reclama que $objs não existe
echo "Existem diversas {$obj}s." . '<br>'; // método correto de enviar unindo ao texto da string

// interpolar com espaços entre as chaves, não funcionam como esperado
echo "Haviam 5 { $obj}s, todas as 5 {$obj}s foram perdidas." . '<br>';

// não é possível realizar operações dentro de interpolação
echo "Operação de interpolação ($num + 1)" . '<br>'; // não vai funcionar
$num++; // deve ser tratado antes de imprimir
echo "Operação de interpolação ($num)" . '<br>'; // agora funciona

?>