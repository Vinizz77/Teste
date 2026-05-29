<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $name= $_GET['nome'];
        $password= $_GET['senha'];
    }
    echo $name;
    echo "<br>";
    echo $password;
?>