<?php 

$number = filter_input(INPUT_GET,"numero", FILTER_VALIDADE_NUMBER_INT);

























function verifyNumber ($number) {
    if ($number < 0 && !is_int($number)) {
        echo "Digite um número válido";
    } else {
        return $number;
    }
}