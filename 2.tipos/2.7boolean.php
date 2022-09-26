<div class="titulo">Tipo Booleano</div>

<?php

echo "Impressão Verdadeiro: " . true . '<br>';
echo var_dump(true) . '<br>';
echo "Impressão Falso: " . false . '<br>';
echo var_dump(false) . '<br>';

echo "Impressão 'True'" . var_dump('true') . '<br>';
echo "Impressão 'False'" . var_dump('false') . '<br>';
echo "Verifica booleano ('true'): " . is_bool('true') . '<br>';
echo "Verifica booleano (true): " . is_bool(true) . '<br>';

// Regras de conversão

echo '<p>Regras de conversão</p>';
echo 'Variável: (0)' . var_dump((bool) 0) . '<br>'; // apenas zero (0) será falso
echo 'Variável: (20)' . var_dump((bool) 20) . '<br>';
echo 'Variável: (-1)' . var_dump((bool) -1) . '<br>';
echo 'Variável: (3.4)' . var_dump((bool) 3.4) . '<br>';
echo 'Variável: ("")' . var_dump((bool) "") . '<br>';
echo 'Variável: ("a")' . var_dump((bool) "a") . '<br>';
echo 'Variável: ("foobar")' . var_dump((bool) "foobar") . '<br>';
echo 'Variável: (" ")' . var_dump((bool) " ") . '<br>';
echo 'Variável: ("0")' . var_dump((bool) "0") . '<br>';
echo 'Variável: (!!"")' . var_dump((bool) !!"") . '<br>';

?>