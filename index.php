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

if($pirmas > $antras && $antras != 0) {
    echo "$pirmas pirmas skaicius, $antras antras skaicius";
    echo '<br> rezultatas:';
    echo round($pirmas/$antras, 2);
} else if($antras != 0 && $pirmas != 0){
    echo "$antras antras skaicius, $pirmas pirmas skaicius";
    echo '<br> rezultatas:';
    echo round($antras/$pirmas, 2);
}

//3 Uzduotis
echo '<br>';
echo '3 uzduotis';
echo '<br>';
$pirmasKintamasis = rand(0, 25);
$antrasKintamasis = rand(0, 25);
$treciasKintamasis = rand(0, 25);

if($pirmasKintamasis > $antrasKintamasis && $pirmasKintamasis < $treciasKintamasis) {
echo $pirmasKintamasis;
} else if($pirmasKintamasis > $treciasKintamasis && $pirmasKintamasis < $antrasKintamasis) {
    echo $pirmasKintamasis;
} else if($antrasKintamasis > $pirmasKintamasis && $antrasKintamasis < $treciasKintamasis) {
    echo $antrasKintamasis;
} else if($antrasKintamasis > $treciasKintamasis && $antrasKintamasis < $pirmasKintamasis) {
    echo $antras;
} else if ($treciasKintamasis > $pirmasKintamasis && $treciasKintamasis < $antrasKintamasis) {
    echo $treciasKintamasis;
} else {
    echo $treciasKintamasis;
}

//4 Uzduotis



?>

<?php

is_int($name);
is_int($name);
is_int($name);
is_int($name);

?>