<div center class="titulo">Integração CSS</div>

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

<style>
    button {
        padding: 5px <?= 40 - 20 ?>px;
        background-color: blue;
        color: whitesmoke;
        font-weight: bold;
        border-radius: <?= 2 * 6 ?>px;
    }

    [center] {
        display: flex;
        flex-direction: column 15px;
        justify-content: center;
        text-align: center;
    }

    [azul] {
        color: blue;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>