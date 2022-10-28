<div class="titulo">Variáveis variáveis</div>

<?php

// atribuição das variáveis de variáveis
$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'resolver';
$resolver = 'esse';
$esse = 'desafio';

// Desafio: Imprimir a frase abaixo usando apenas a variável $a

echo "<p>Nossa! Eu consegui resolver esse desafio.</p><hr>";


echo "{$a}! {$$a} {$ $$a} {$ $ $$a} {$ $ $ $$a} {$ $ $ $ $$a}.";
// Por algum motivo o Prettier fica separando depois do 2o $, mas no HTML fica certo

?>