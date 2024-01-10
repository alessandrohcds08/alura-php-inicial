<?php

    $csv = '.,Alessandro Souza, 29, alessandro.souza@voxline.com.br.,';

    echo trim($csv, '.,') . PHP_EOL;
    echo ltrim($csv, '.,') . PHP_EOL;
    echo rtrim($csv, '.,') . PHP_EOL;