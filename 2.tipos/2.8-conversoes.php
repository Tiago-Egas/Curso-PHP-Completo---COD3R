<div class="titulo">Conversões de tipos</div>

<?php

echo '<p>Checagem de tipo</p><hr>';
echo "Is_int (PHP_INT_MAX): " . is_int(PHP_INT_MAX) . '<br>';
echo "Is_float (PHP_FLOAT_MAX): " . is_float(PHP_FLOAT_MAX) . '<br>';
echo '<br>';

echo '<p>Converte Inteiro para Real</p><hr>';
echo "PHP_INT_MAX + 1: " . var_dump(PHP_INT_MAX + 1) . '<br>';
echo "1 + 1.0: " . var_dump(1 + 1.0) . '<br>';
echo "Conversão por casting: " . var_dump((float) 5) . '<br>';
echo '<br>';

echo '<p>Converte Real para Inteiro</p><hr>';
echo "PHP_INT_MAX + 1: " . var_dump(PHP_INT_MAX + 1) . '<br>';
echo "1 + 1.0: " . var_dump(1 + 1.0) . '<br>';
echo "Casting direto (6.8): " . var_dump((int) 6.8) . '<br>';
echo "Casting retirando apenas parte inteira (6.8): " . var_dump(intval(6.8)) . '<br>';
echo "Casting com arredondamento (6.8): " . var_dump((int) round(6.8)) . '<br>';
echo '<br>';

echo '<p>Conversões com Caracteres</p><hr>';
echo "Exemplo de concatenação (3 + '2'): " . var_dump(3 + "2") . '<br>';
echo "Exemplo de concatenação (3 . '2'): " . var_dump(3 . "2") . '<br>';
echo "Verifica se é string is_string(3 . '2'): " . is_string(3 . "2") . '<br>';
echo "Verifica se é string is_string(3 + '2'): " . is_string(3 + "2") . '<br>';
echo "Testa soma de inteiro com caractere (1 + 'dois'): " . "gera erro ao tentar somar número com letras"  /* var_dump(1 + "dois") */ . '<br>';
echo "Testa soma de inteiro com caractere (1 + '2 dois'): " . "gera erro ao somar número com letras, mesmo que possua número dentro da string"  /* var_dump(1 + "2 dois") */ . '<br>';
echo "Testa soma de inteiro com string de soma (1 + '2 + 5'): " . "gera erro ao somar número com letras, mesmo que possua número dentro da string" /* . var_dump(1 + "2 + 5") */ . '<br>';
echo "Soma de inteiro com string de real (1 + '5.3'): " . var_dump(1 + "5.3") . '<br>';
echo "Soma de inteiro com string de real em notação científica (1 + '-5.3e2'): " . var_dump(1 + "-5.3e2") . '<br>';
echo "Converte para interiro com casting de dentro de string ('5.3'): " . var_dump((int) 5.3) . '<br>';
echo "Converte para real com casting de dentro de string ('5.3'): " . var_dump((float) 5.3) . '<br>';
echo '<br>';
?>