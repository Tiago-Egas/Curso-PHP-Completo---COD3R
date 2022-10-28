<div class="titulo">Desafio Pi</div>

<?php

echo "Valor PI preciso no PHP = " . pi() . "<br>";
$pi = 3.14;
echo "Valor PI definido na variável (pi): $pi<br>";

echo "<p>Testando diferença entre os valores de PI</p><hr>";
if ($pi == pi()) {
    echo "Iguais.<br>";
} else {
    echo "Diferentes.<br>";
}

// Operador relacional
$piErrado = 2.8;

echo "<p>Resposta do desafio</p><hr>";
echo "Diferença entre PI e $pi = " . ($pi - pi()) . "<br>";
echo "Diferença entre $pi e $piErrado = " . ($pi - $piErrado) . "<br>";

echo "<p>Testando PI PHP vs PI variável com margem</p><hr>";
if ($pi - pi() <= 0.01) {
    echo "Praticamente iguais.<br>";
}

echo "<p>Testando PI PHP vs PI errado com margem</p><hr>";
if ($pi - $piErrado <= 0.01) {
    echo "Praticamente iguais.<br>";
} else {
    echo "Valor diferente do esperado!<br>";
}

?>