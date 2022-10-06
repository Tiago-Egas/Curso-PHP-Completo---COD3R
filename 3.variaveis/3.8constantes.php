<div class="titulo">Constantes</div>

<?php

echo "<p>Por convenção as constantes são sempre em caixa alta separando palavras com underline: </p>";

define('TAXA_DE_JUROS', 5.9);
echo "Imprimindo a Taxa de Juros: " . TAXA_DE_JUROS . "!<br>";
echo '<br>';
const NOVA_TAXA = 6.7;
echo "Imprimindo a Nova Taxa de Juros: " . NOVA_TAXA . "!<br>";
echo '<br>';
$taxaVarejo = 6.39;

// const NOVISSIMA_TAXA = $taxaVarejo;
echo "Não é possível atribuir uma constante a partir de uma variável: <br>";
echo "const NOVISSIMA_TAXA = " . '$taxaVarejo' . ";<br>";
echo '<br>';
echo "Agora com define é possível: <br>";
define('NOVISSIMA_TAXA2', $taxaVarejo);
echo "define('NOVISSIMA_TAXA2', taxaVarejo ($taxaVarejo)) = " . NOVISSIMA_TAXA2;
echo '<br>';
echo "Usando const para somar dentro da constante: <br>";
define('NOVISSIMA_TAXA3', 3.49 + 1.98);
echo "define('NOVISSIMA_TAXA3', taxaVarejo ($taxaVarejo)) = " . NOVISSIMA_TAXA3;
echo '<br>';
echo "Mas apenas com define é possível realizar somas com as variáveis: <br>";
define('NOVISSIMA_TAXA4', $taxaVarejo + 1.2);
echo "define('NOVISSIMA_TAXA4', taxaVarejo ($taxaVarejo) + 1.2) = " . NOVISSIMA_TAXA4;

echo '<p>Outras constantes conhecidads</p>';

echo PHP_VERSION . ' = PHP_VERSION' . '<br>';
echo PHP_INT_MAX . ' = PHP_INT_MAX' . '<br>';

echo "Como saber a linha atual do código (__LINE__): " . __LINE__ . '<br>';
echo "Saber o local e nome do arquivo em execução: " . __FILE__ . '<br>';
echo "E como saber apenas o local: " . __DIR__ . '<br>';

?>