<?php
    $url = "https://alura.com.br";

    if (str_starts_with($url, "https")) {
        echo "é uma url segura";
    } else {
        echo "não é uma url segura";

    }

    echo PHP_EOL;

    if (str_ends_with($url, "br")) {
        echo "é um dominio do brasil";
    } else {
        echo "não é um dominio do brasil";

    }

    echo PHP_EOL;