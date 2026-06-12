<?php
function dividir(int $a, int $b): float
{
    if ($b != 0) {
        return $a / $b;
    } else {
        echo "O divisor não pode ser zero.";
        return 0;
    }
}

echo dividir(36, 0);

echo "<br>";

function somar(int $n1, int $n2): void{
    echo $n1+$n2;
}
$resultdoSoma = somar(30,37);
var_dump($resultdoSoma);
echo "<br>";

echo "<br>";

function mult(int $n3, int $n4): int{
    return $n3*$n4;}
$resultdoMult = mult(45,32);
var_dump($resultdoMult);
  ?>