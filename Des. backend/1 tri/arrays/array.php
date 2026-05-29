<?php

    //Array Indexado - Acesso pelo índice
    $frutas = ["maça", "banana", "uva", "laranja"];
    echo $frutas[3];
    $frutas [1] ="Manga";
    $frutas [] ="abacaxi";

    echo "<br>";
    print_r($frutas);
    echo "<br>";
    //Array assosiativo - Acesso pela chave

    $pessoa = [
        "nome"=> "Vini",
        "idade"=> 17,
        "altura"=> 1.63
    ];
    $pessoa["nome"]= "joão";
    echo "$pessoa[nome]";
    echo "<br>";    

    //Array númerico Multidimensional

    $venda = [
        ["camisa", 49, 67.00],
        ["tenis", 39, 61.67],
        ["camisa", 75, 23.76]
    ];

    print_r($venda[0][2]);
    echo "<br>";

    //Array assosiativo Multidimensional
    
    $aluno=[
        "pessoa"=>[
        "nome"=>"bruno",
        "idade"=>67,
        "altura"=>1.50
        ],

       "pessoa2"=>[
        "nome"=>"brono",
        "idade"=>18,
        "altura"=>2.50
    ],
    "pessoa3"=>[
        "nome"=>"brunin",
        "idade"=>7,
        "altura"=>1.67
    ],
    ];

    echo $aluno["pessoa2"]['idade'];
?>