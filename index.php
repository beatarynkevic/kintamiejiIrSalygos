<?php

//1 Uzduotis
$name = 'Beata';
$lastName = 'Rynkevic';
$birthYear = 1995;
$currentYear = 2021;
$currentAge = $currentYear - $birthYear;

$answer = "As esu $name $lastName. Man yra $currentAge metai";
echo $answer;

//2 Uzduotis
echo '<br>';
$pirmas = rand(0, 4);
$antras = rand(0, 4);

if($pirmas > $antras) {
    echo "$pirmas pirmas skaicius, $antras antras skaicius";
    echo '<br> rezultatas:';
    echo round($pirmas/$antras, 2);
} else {
    echo "$antras antras skaicius, $pirmas pirmas skaicius";
    echo '<br> rezultatas:';
    echo round($antras/$pirmas, 2);
}

//3 Uzduotis

?>