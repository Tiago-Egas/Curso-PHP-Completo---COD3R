<div class="titulo">If Else</div>

<?php

if (true) {
    echo "Serei impresso?<br>";
}

if (false) {
    echo "Serei impresso novamente?<br>";
}
echo "<br>";
// pegadinha
if (false); {
    echo "Vai ser impresso, SQN!<br>";
    echo "Mas foi!!<br>";
}
echo "<br>";

// outra aula
if (true) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso!<br>";
}

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