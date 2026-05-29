<?php

    $valor=18;
    $valorDes=($valor*10/100);
    $valorFin=($valor-$valorDes);
    $mensagem=($valor>=100)?"Seu produto ficou ". $valorFin:"Seu produto ficou ". $valor;
    echo $mensagem

?>