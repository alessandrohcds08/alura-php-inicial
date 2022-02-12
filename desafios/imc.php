<?php
$altura = 1.73;
$peso = 55.6;
$imc = $peso / ($altura ** 2);

switch ($imc) {
    case $imc < 16:
        echo 'subpeso severo';
        break;
    case $imc >= 16 && $imc <= 19.9:
        echo 'subpeso';
        break;
    case $imc >= 20 && $imc <= 24.9:
        echo 'normal';
        break;
    case $imc >= 25 && $imc <= 29.9:
        echo 'sobrepeso';
        break;
    case $imc >= 30 && $imc <= 39.9:
        echo 'obeso';
        break;
    case $imc >= 40:
        echo 'obeso morbido';
        break;
}