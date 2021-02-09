<?php

//1 Uzduotis
echo '1 uzduotis';
echo '<br>';
$name = 'Beata';
$lastName = 'Rynkevic';
$birthYear = 1995;
$currentYear = 2021;
$currentAge = $currentYear - $birthYear;

$answer = "As esu $name $lastName. Man yra $currentAge metai";
echo $answer;
echo '<br>';
echo '<br>';

//2 Uzduotis
echo '2 uzduotis';
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
} else {
    echo '<br>';
    echo 'Pagavau nuli';
}

echo '<br>';
echo '<br>';

//3 Uzduotis
echo '3 uzduotis';
echo '<br>';
$pirmasKintamasis = rand(0, 25);
$antrasKintamasis = rand(0, 25);
$treciasKintamasis = rand(0, 25);

if($pirmasKintamasis > $antrasKintamasis && $pirmasKintamasis < $treciasKintamasis) {
echo "Vidurine reiksme yra: $pirmasKintamasis";
} else if($pirmasKintamasis > $treciasKintamasis && $pirmasKintamasis < $antrasKintamasis) {
    echo "Vidurine reiksme yra: $pirmasKintamasis";
} else if($antrasKintamasis > $pirmasKintamasis && $antrasKintamasis < $treciasKintamasis) {
    echo "Vidurine reiksme yra: $antrasKintamasis";
} else if($antrasKintamasis > $treciasKintamasis && $antrasKintamasis < $pirmasKintamasis) {
    echo "Vidurine reiksme yra: $antrasKintamasis";
} else if ($treciasKintamasis > $pirmasKintamasis && $treciasKintamasis < $antrasKintamasis) {
    echo "Vidurine reiksme yra: $treciasKintamasis";
} else {
    echo "Vidurine reiksme yra: $treciasKintamasis";
}
echo '<br>';

//4 Uzduotis
echo '<br>';
echo '4 uzduotis';
echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if( ($a+$b)>$c && ($a+$c)>$b && ($b+$c)>$a ) {
    echo 'Susidaro trikampis is: '."($a + $b + $c)";
} else{
    echo 'Nesusidaro trikampis';
}

//5 Uzduotis
echo '<br><br>';
echo '5 uzduotis';
echo '<br>';

$first = rand(0, 2);
$second = rand(0, 2);
$third = rand(0, 2);
$fourth = rand(0, 2);

$countZero = 0;
$countOne = 0;
$countTwo = 0;

if ($first === 0) $countZero++;
if ($second === 0) $countZero++;
if ($third === 0) $countZero++;
if ($fourth === 0) $countZero++;
if ($first === 1) $countOne++;
if ($second === 1) $countOne++;
if ($third === 1) $countOne++;
if ($fourth === 1) $countOne++;
if ($first === 2) $countTwo++;
if ($second === 2) $countTwo++;
if ($third === 2) $countTwo++;
if ($fourth === 2) $countTwo++;

echo 'nuliu yra:'.$countZero.'<br>'.'vienetu yra: '.$countOne.'<br>'.'dviejetu yra: '.$countTwo.'<br>';



?>