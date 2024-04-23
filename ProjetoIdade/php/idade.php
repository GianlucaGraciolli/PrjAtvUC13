<?php

$name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
$cargo = $_POST["cargo"];
$borndate = $_POST["born-date"];

CalculateBday($borndate);

function CalculateBday ($borndate) {
    $today = date("d/m/Y");
    $age = date_diff(date_create($borndate), date_create($today) );
    echo $age->format("%R%a years");
} return "erro";