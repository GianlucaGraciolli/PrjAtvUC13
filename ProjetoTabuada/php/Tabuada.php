<?php

$number = filter_input(INPUT_GET, "numero", FILTER_VALIDATE_INT);

if (verifyNumber($number) == null) {
    echo"<h1> Tabuda do número " . $number . " </h1>";
    CalculateTable($number);
} else {
    header("Location: ./../index.html");
}






















function CalculateTable($number)
{
    $resultado = 0;
    echo "<table>";
    echo "<tr> <th> Tabuada </th> <th> Resultado </th>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr> <td> " . $number . " X " . $i . " </td> <td> " . $resultado = $number * $i . " </td> </tr>";
    }
    echo "</table>";

}



function verifyNumber($number)
{
    if ($number < 0 || !is_int($number)) {
        echo "Digite um número válido";
    }

    return true;
    
}