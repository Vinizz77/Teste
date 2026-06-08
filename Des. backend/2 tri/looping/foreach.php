<?php

    /*$nomes=["João", "Vinicius", "Claudio", "Michel", "Paulo"];

    for ($i=0; $i<count($nomes); $i++){
        echo $nomes[$i]. "<br>";
    }
    echo "<br>";

    foreach ($nomes as $nome){
        echo $nome. "<br>";
    }

    echo "<br>";

    $numeros= [10,40,67,80,42];
    foreach ($numeros as $numero){
        echo $numero. "<br>";
    }*/

    //ex1
    $nomes=[ "Ana", "Carlos", "João", "Maria", "Pedro"];

    foreach ($nomes as $nome){
        echo $nome. "<br>";
    }

        echo "<br>";

    //ex2
    $numeros=[67,42,88,77,28];

    foreach ($numeros as $numero){
        echo $numero. "<br>";
    }

        echo "<br>";

//ex3
    $soma=0;
    $valor=[20,20,10,10,7];
    foreach($valor as $valores){
    $soma+= $valores;
    }
    echo $soma;

       echo "<br>";

//ex4
    $frutas=["Maça", "banana", "uva"];
    foreach($frutas as $fruta){
        echo "Eu gosto de ". $fruta. "<br>";
    }

       echo "<br>";

//ex5
    $nums=[1,2,3,4,5,6,7,8,9,10];
    foreach($nums as $num){
        if ($num % 2 == 0){
            echo $num;
        }
    }
    
 



?>