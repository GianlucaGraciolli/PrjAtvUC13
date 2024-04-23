<?php

$number = filter_input(INPUT_GET, "numero", FILTER_VALIDATE_INT);

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
        return false;
    } 
    return true;
    
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/style.css">
</head>
<body>
    <main class="flex">
        <?php
            if (verifyNumber($number) == true) {
    
                echo"<h1> Tabuda do número " . $number . " </h1>";
                CalculateTable($number);
            } else {
                header("Location: ./../index.html");
            }

        ?>
    </main>
</body>
</html>