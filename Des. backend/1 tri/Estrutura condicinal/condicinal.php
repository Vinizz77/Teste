<?php

    $idade= 19;
    $temCarteira = true;

    if($idade >=18 && $temCarteira == true) {
        echo "Pode dirigir";
    }
    else{
        echo "Não podede dirigir";
    }

    echo "<br>";

    $dia = "sábado";

    if ($dia == "sábado "||"domingo") {
        echo "Final de semana";
    }
    else{
        echo "dia de semana";
    }
    echo "<br>";

    $nota=67;

    if($nota >=7){
        echo "Aprovado";
    }
    elseif($nota >=4){
        echo "Recuperação";
    }
    else{
        echo "Reprovado";
    }

    echo "<br>";

    #Operador terminario

    $idade1 = 19;
    $mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

    echo "$mensagem";
?>