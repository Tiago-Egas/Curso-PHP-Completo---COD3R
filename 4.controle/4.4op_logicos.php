<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p>Valor verdadeiro</p><hr>";
echo "Exibindo Valor true: " . var_dump(true) . "<br>";

echo "<p>Negação Lógica</p><hr>";
echo "Negando valor true: " . var_dump(!true) . "<br>";
// algumas linguagens aceitam como NOT

echo "<p>Tabela verdade 'AND' (E)</p><hr>";
// funciona como && ou AND
echo "True vs true: " . var_dump(true && true) . "<br>";
echo "True vs false: " . var_dump(true && false) . "<br>";
echo "False vs true: " . var_dump(false and true) . "<br>";
echo "False vs false: " . var_dump(false and false) . "<br>";

echo "<p>Tabela verdade 'OR' (OU)</p><hr>";
// funciona também como || ou OR
echo "True vs true: " . var_dump(true || true) . "<br>";
echo "True vs false: " . var_dump(true || false) . "<br>";
echo "False vs true: " . var_dump(false or true) . "<br>";
echo "False vs false: " . var_dump(false or false) . "<br>";

echo "<p>Tabela verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
// funciona também como != ou XOR
echo "True vs true: " . var_dump(true != true) . "<br>";
echo "True vs false: " . var_dump(true != false) . "<br>";
echo "False vs true: " . var_dump(false xor true) . "<br>";
echo "False vs false: " . var_dump(false xor false) . "<br>";

echo "<p>Exemplo IF/Else e Operadores Lógicos</p><hr>";
$idade = 45;
$sexo = 'M';
$prevPaga = true;

// simplificando as validações

$critHomem = ($idade >= 65 && $sexo === 'M');
$critMulher = ($idade >= 60 && $sexo === 'F');
$critAtingido = $critHomem || $critMulher;
$podeAposentar = $prevPaga && $critAtingido;

if ($podeAposentar) {
    echo "Pode se aposentar.<br>";
} elseif ($podeAposentar) {
    echo "Pode se aposentar.<br>";
} else {
    echo "Vai ter que trabalhar mais!<br>";
}

echo "Idade = $idade.<br>Sexo = $sexo.<br>Pagou INSS = $prevPaga.<br>";

?>