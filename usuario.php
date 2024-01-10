<?php
    $nome = 'Alessandro Souza';
    $email = "alessandro.souza@voxline.com.br ";
    $senha = "í123456";

    if (mb_strlen($senha) < 8) {
        echo 'Senha insegura ' . PHP_EOL;
    }

    $posicaoArroba = strpos(trim($email), '@');

    $usuario = substr(trim($email), 0, $posicaoArroba);

    echo mb_strtoupper($usuario) . PHP_EOL;
    echo substr($email, $posicaoArroba) . PHP_EOL;

    list($nome, $sobrenome) = explode(' ', $nome);

    echo 'nome: ' . $nome . PHP_EOL;
    echo 'sobrenome: ' . $sobrenome . PHP_EOL;

    $csv = 'Alessandro Souza, 29, alessandro.souza@voxline.com.br';
    var_dump(explode(',', $csv));

    echo trim($email, '').PHP_EOL;