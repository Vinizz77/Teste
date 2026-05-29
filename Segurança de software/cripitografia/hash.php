<?php

  $senha= "6767" ;

  $cost= [
    'cost'=> 12
  ];

  $hash= password_hash($senha, PASSWORD_BCRYPT, $cost);

  echo 'Hash gerado:' . $hash;

  $senhaDigitada= "6767";
    if (password_verify($senhaDigitada, $hash)){
    echo "entrou";
   }
    else {
        echo "Senha incorreta";
    }
?>