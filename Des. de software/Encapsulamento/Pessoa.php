<?php

    class Pessoa {

     private $nome;
     private $idade;

     public function __construct($n, $i){
        $this->nome= $n;
        $this->idade= $i;
     }
     public function getNome(){
        return $this->nome;
     }
     public function setNome($n){
        $this->nome= $n;
     }
    }

    $obj= new Pessoa("Vini", 14);
    echo $obj->getNome();
    $obj->setNome("Claudio",);
    echo "<br>";
    echo $obj->getNome();
?>  