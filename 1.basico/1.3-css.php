<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '<small>';
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>

<br>
<div center>
    <button dobro>
        <?= "Legal" ?>
    </button>
</div>

<!-- 
    CSS pode ser configurado em área fora do PHP ou dentro, mas 
    desta forma o CSS precisará ser impresso pelo PHP a cada linha.
    O HTML recebera os caracteres e interpretará como um texto normal
    ou CSS, conforme formatação feita na impressão do PHP
-->

<style>
button {
    padding: 5px <?=40 - 20 ?>px;
    background-color: blue;
    color: whitesmoke;
    font-weight: bold;
    border-radius: <?=2 * 6 ?>px;
}

[center] {
    display: flex;
    flex-direction: column 15px;
    justify-content: center;
}

[azul] {
    color: blue;
}

[dobro] {
    font-size: <?=10 - 8 ?>rem;
}
</style>