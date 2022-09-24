<div class="titulo">Olá PHP</div>

<h2>Exemplo A</h2>
<?php
echo 'Olá';
echo "\n"; // executado apenas no php.exe
echo '<br>';
echo ' Mundo!'; // espaço do começo suprimido pelo HTML
echo '<br>';
?>

<h2>Exemplo B</h2>
<?= "Outra forma de imprimir textos" ?>
<!-- Impressão direta sem necessidade do echo -->

<?php
phpinfo();
