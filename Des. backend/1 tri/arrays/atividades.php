<?php

    $nomes= ["Ana","Carlos", "Pedro", "Lucas"];
    echo array_search("Pedro",$nomes);
    echo "<br>";

    $frutas=["Maça","Banana","Uva","Melancia","Perâ"];
    echo count($frutas);
    echo "<br>";

    $numeros=[5,10,15];
    echo array_sum($numeros);
    echo "<br>";

    $nomes1=["João","Maria","Pedro"];
    array_shift($nomes1);
    print_r($nomes1);
    echo "<br>";

    $numeros1=[3,5,7,9];
    if (in_array(7,$numeros1)){
        echo "Existe";
    };
    echo "<br>";

    $cores=["azul","vermelho"];
    array_push($cores, "roxo");
    print_r($cores);
    echo "<br>";

    $numero2= [10,20,30,40];
    array_pop($numero2);
    print_r($numero2);
    echo "<br>";

    $nomes2= ["Carlos","Beatriz"];
    array_unshift($nomes2,"Ana");
    print_r($nomes2);
    echo "<br>";

    $valores=[8,3,1,6];
    sort($valores);
    print_r($valores);
    echo "<br>";

    $a=[1,2,3];
    $b=[4,5];
    $resultado1=array_merge($a,$b);
    print_r($resultado1);
?>