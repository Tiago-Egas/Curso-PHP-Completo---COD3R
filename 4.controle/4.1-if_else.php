<div class="titulo">If Else</div>

<?php

echo "<p>If simples</p><hr>";
if (true) {
    echo "Serei impresso?<br>";
}

if (false) {
    echo "Serei impresso novamente?<br>";
}
echo "<br>";

echo "<p>If falso</p><hr>";
// pegadinha
if (false); {
    echo "Vai ser impresso, SQN!<br>";
    echo "Mas foi!!<br>";
}
echo "<br>";

echo "<p>Teste if/else simples</p><hr>";
// outra aula
if (true) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso!<br>";
}

echo "<p>Teste Ifs aninhados</p><hr>";
// ifs aninhados
if (false) {
    echo "Passo A<br>";
} elseif (false) {
    echo "Passo B<br>";
} elseif (true) {
    echo "Passo C<br>";
} else {
    echo "Último passo.<br>";
}

?>