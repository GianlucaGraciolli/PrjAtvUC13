<?php

$name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
$cargo = $_POST["cargo"];
$borndate = $_POST["born-date"];
$today = date_create("now");  
//var_dump($today);

CalculateBday($borndate, $today);

function CalculateBday ($borndate, $today) {
    $age = date_create($borndate)->diff($today);
    echo "Você tem " . $age->format("%y") . " Anos";
}   