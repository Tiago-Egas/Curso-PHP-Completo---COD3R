<div class="titulo">Variáveis variáveis</div>

<?php

// iniciando variáveis de exemplo
$a = 'valorA'; // variável comum
$$a = 'valorAA'; // variável variável

echo '$a = ' . "valorA <br>";
echo '$$a = ' . "valorAA <br>";
echo '<br>';

// conteúdo foi explicitado ao criar a variável $$a
// agora a variável $$a pode ser impressa diretamtente

echo 'Impressão de variável comum ($a): ' . "$a <br>";
echo 'Impressão de variável variável ($$a): ' . "{$$a} <br>";

// então agora $$a será o conteúdo valorAA
echo '$$a Também resulta em ' . "${$a} <br>";
echo 'Assim como $valorA exibirá ' . "$valorA <br>";
echo '<br>';

// de forma mais visual
$epa = 'opa';
$opa = 'vish';
$nosfa = 'vish';
$vish = 'nosfa'; // conteúdo em sequência apontou para a próxima variável

echo '$epa = ' . "$epa <br>";
echo '$opa = ' . "$opa <br>";
echo '$vish = ' . "$vish <br>";
echo '$nosfa = ' . "$nosfa <br>";
echo '<br>';

// então cada $ permite permite o acesso encadeado dos conteúdos
echo 'agora $epa irá imprimir ' . " {$epa} " . '<br>'; // naturalmente
echo 'agora $$epa irá imprimir ' . " {$$epa} " . '<br>'; // 
echo 'agora $$$epa irá imprimir ' . " {$ $$epa} " . '<br>';
echo 'agora $$$$epa irá imprimir ' . " {$ $ $$epa} " . '<br>';

?>