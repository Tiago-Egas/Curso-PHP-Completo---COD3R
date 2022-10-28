<div class="titulo">Operadores Relacionais</div>

<?php

echo "<p>Comparação de igualdade de valores</p><hr>";
echo "(1 == 1)" . var_dump(1 == 1) . "<br>";
echo "(1 > 1)" . var_dump(1 > 1) . "<br>";
echo "(1 >= 1)" . var_dump(1 >= 1) . "<br>";
echo "(1 != 1)" . var_dump(1 != 1) . "<br>";
echo "(1 <> 1)" . var_dump(1 <> 1) . "<br>";

echo "<p>Comparação estrita de valores e tipos</p><hr>";
echo "(1 === '1')" . var_dump(1 === "1") . "<br>";
echo "(1 !== '1')" . var_dump(1 !== "1") . "<br>";

echo "<p>Comparação com If/Else</p><hr>";
$idade = 45;
echo "Definindo a idade ($idade).<br>";
if ($idade < 18) {
    echo "Menor de idade = $idade anos.<br>";
} elseif ($idade < 65) {
    echo "Adulto = $idade anos.<br>";
} else {
    echo "Melhor idade! = $idade anos!<br>";
}

echo "<p>Comparação com Spaceship</p><hr>";
echo "(500 <=> 3)" . var_dump(500 <=> 3) . "<br>";
echo "(35 <=> 35)" . var_dump(35 <=> 35) . "<br>";
echo "(8 <=> 9)" . var_dump(8 <=> 9) . "<br>";

?>