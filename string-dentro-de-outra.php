<?php
    $nome = "Alessandro Souza";

    $familia = str_contains($nome, 'Souza');

    if($familia){
        echo "$nome é da minha familia".PHP_EOL;
    }else{
        echo "$nome não é da minha familia".PHP_EOL;

    }