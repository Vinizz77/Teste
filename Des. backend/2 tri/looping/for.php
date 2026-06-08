<?php
//ex1
    for ($i = 1; $i<= 10; $i++){
        echo $i ."<br>";
    } 

    echo "<br>";

//ex2
     for ($i = 10; $i>= 1; $i--){
        echo $i ."<br>";
    } 

      echo "<br>";

//ex3
    for ($i = 0; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

      echo "<br>";

//ex4
    for ($i = 1; $i <= 15; $i += 2) {
    echo $i . "<br>";
    }

      echo "<br>";

//ex5
    for ($i = 1; $i<10; $i++){
        echo (7 * $i). "<br>";
    }
      echo "<br>";

//ex6
    $soma=0;
   for ($i = 1; $i <= 100; $i++) {
    $soma = $soma + $i;
}
      echo $soma;

      echo "<br>";

//ex7
   for ($i = 1; $i <=10; $i++){
    echo $i ** 2 . "<br>";
   }

      echo "<br>";

//ex8
    for ($i=0; $i<=10; $i++){
        echo "PHP é legal". "<br>";
    }

    echo "<br>";


//ex10
    $fat=1;
    for ($i=1; $i<=5; $i++){
        $fat=$fat * $i;
    }
    echo $fat;
?>

