<?php
for ($i = 1; $i <= 10; $i++) {
    echo 'TABUADA DO ' . $i . PHP_EOL;
    for ($x = 1; $x <= 10; $x++) {
        echo "$i x $x = " . $i * $x . PHP_EOL;
    }
    echo '-----------------' . PHP_EOL;
}