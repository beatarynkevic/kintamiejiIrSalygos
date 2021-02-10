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

echo "$first, $second, $third, $fourth";
echo '<br>';
echo 'nuliu yra:'.$countZero.'<br>'.'vienetu yra: '.$countOne.'<br>'.'dviejetu yra: '.$countTwo.'<br>';




//6 Uzduotis
echo '<br><br>';
echo '6 uzduotis';
echo '<br>';
$skaicius = rand(1, 6);

echo "<h".$skaicius.">".$skaicius."</h".$skaicius.">";

//7 Uzduotis
echo '<br><br>';
echo '7 uzduotis';
echo '<br>';

$skaicius1 = rand(-10, 10);
$skaicius2 = rand (-10, 10);
$skaicius3 = rand(-10, 10);

if ($skaicius1 == 0) {
    echo '<span style="color:red;">'. $skaicius1 .'</span>';
} else if($skaicius1 < 0) {
    echo '<span style="color:green;">'. $skaicius1 .'</span>';
} else {
    echo '<span style="color:blue;">'. $skaicius1 .'</span>';
}
echo '<br>';
if ($skaicius2 == 0) {
    echo '<span style="color:red;">'. $skaicius2 .'</span>';
}else if($skaicius2 < 0) {
    echo '<span style="color:green;">'. $skaicius2 .'</span>';
} else {
    echo '<span style="color:blue;">'. $skaicius2 .'</span>';
}
echo '<br>';
if ($skaicius3 == 0) {
    echo '<span style="color:red;">'. $skaicius3 .'</span>';
}else if($skaicius3 < 0) {
    echo '<span style="color:green;">'. $skaicius3 .'</span>';
} else {
    echo '<span style="color:blue;">'. $skaicius3 .'</span>';
}
echo '<br>';

//8 Uzduotis
echo '<br><br>';
echo '8 uzduotis';
echo '<br>';

$zvakiuKiekis = rand(5, 3000);

if ($zvakiuKiekis > 1000 && $zvakiuKiekis < 2000) {
    echo 'Zvakiu kiekis yra: '. $zvakiuKiekis .'<br> Kaina su 3proc nuolaida yra: '. ($zvakiuKiekis*0.97);
} else if ($zvakiuKiekis > 2000) {
    echo 'Zvakiu kiekis yra: '. $zvakiuKiekis .'<br> Kaina su 4proc nuolaida yra: '. ($zvakiuKiekis*96/100);
} else {
    echo 'Zvakiu kiekis yra: '. $zvakiuKiekis .'<br> Nuolaida nera suteikiama';
}

//9 Uzduotis
echo '<br><br>';
echo '9 uzduotis';
echo '<br>';

$uno = rand(0, 100);
$dos = rand(0, 100);
$tres = rand(0, 100);
$daliklis = 0;

$vidurkis = ($uno + $dos + $tres)/3;
echo "Vidurkis yra: $vidurkis";
echo '<br>';
echo '------------------'.'<br>';

$vidurkisSuSalygom = 0;
if ($uno < 10 && $uno > 90) {
    $vidurkisSuSalygom += $uno;
    $daliklis++;
}
if ($dos < 10 && $dos > 90) {
    $vidurkisSuSalygom += $dos;
    $daliklis++;
}
if ($tres < 10 && $tres > 90) {
    $vidurkisSuSalygom += $tres;
    $daliklis++;
}

$vidurkis2 = $vidurkisSuSalygom/3;
echo "Antras vidurkis yra: ";
echo round($vidurkis2);

//10 Uzduotis
echo '<br><br>';
echo '10 uzduotis';
echo '<br>';

$valandos = rand(0,24);
$minutes = rand(0,59);
$sekundes = rand(0,59);

$valandos = $valandos < 10 ? '0' . $valandos : $valandos;
$minutes = $minutes < 10 ? '0' . $minutes : $minutes;
$sekundes = $sekundes < 10 ? '0' . $sekundes : $sekundes;


$papildomosSekundes = rand(0, 300);
echo 'Dabartinis laikas yra: '. $valandos.':'.$minutes.':'.$sekundes;
echo '<br>';

$hoursAfter = $valandos;
$minutesAfter = floor($papildomosSekundes/60) + $minutes;
$secondsAfter = ($papildomosSekundes % 60) + $second;

if($secondsAfter >= 60) {
    $minutesAfter++;
    $secondsAfter = ($secondsAfter % 60);
}
if($minutesAfter >= 60) {
    $hoursAfter++;
    $minutesAfter = ($minutesAfter % 60);
    $secondsAfter = ($secondsAfter % 60);
}
if ($hoursAfter >= 24) {
    $hoursAfter = ($hoursAfter % 24);
    $minutesAfter = ($minutesAfter % 60);
    $secondsAfter = ($secondsAfter % 60);
}

$hoursAfter = $hoursAfter < 10 ? '0' . $hoursAfter : $hoursAfter;
$minutesAfter = $minutesAfter < 10 ? '0' . $minutesAfter : $minutesAfter;
$secondsAfter = $secondsAfter < 10 ? '0' . $secondsAfter : $secondsAfter;

echo '<span style =" color:red;">Naujas laikas yra: '.$hoursAfter.':'.$minutesAfter.':'.$secondsAfter.'</span>';

//11 Uzduotis
echo '<br><br>';
echo '11 uzduotis';
echo '<br>';

$rand1 = rand(1000, 9999);
$rand2 = rand(1000, 9999);
$rand3 = rand(1000, 9999);
$rand4 = rand(1000, 9999);
$rand5 = rand(1000, 9999);
$rand6 = rand(1000, 9999);

echo "sugeneruoti skaiciai: $rand1, $rand2, $rand3, $rand4, $rand5, $rand6";

if ($rand2 > $rand1) {
    $laikinas = $rand2;
    $rand2 = $rand1;
    $rand1 = $laikinas;
}

$laikinas = $rand3;
if ($rand3 > $rand1) {
    $rand3 = $rand2;
    $rand2 = $rand1;
    $rand1 = $laikinas;
} else if ($rand3 > $rand2) {
    $rand3 = $rand2;
    $rand2 = $laikinas;
}

$laikinas = $rand4;
if ($rand4 > $rand1) {
    $rand4 = $rand3;
    $rand3 = $rand2;
    $rand2 = $rand1;
    $rand1 = $laikinas;
} else if ($rand4 > $rand2) {
    $rand4 = $rand3;
    $rand3 = $rand2;
    $rand2 = $laikinas;
} else if ($rand4 > $rand3) {
    $rand4 = $rand3;
    $rand3 = $laikinas;
}

$laikinas = $rand5;
if ($rand5 > $rand1) {
    $rand5 = $rand4;
    $rand4 = $rand3;
    $rand3 = $rand2;
    $rand2 = $rand1;
    $rand1 = $laikinas;
} else if ($rand5 > $rand2) {
    $rand5 = $rand4;
    $rand4 = $rand3;
    $rand3 = $rand2;
    $rand2 = $laikinas;
} else if ($rand5 > $rand3) {
    $rand5 = $rand4;
    $rand4 = $rand3;
    $rand3 = $laikinas;
} else if ($rand5 > $rand4) {
    $rand5 = $rand4;
    $rand4 = $laikinas;
}

$laikinas = $rand6;
if ($rand6 > $rand1) {
    $rand6 = $rand5;
    $rand5 = $rand4;
    $rand4 = $rand3;
    $rand3 = $rand2;
    $rand2 = $rand1;
    $rand1 = $laikinas;
} else if ($rand6 > $rand2) {
    $rand6 = $rand5;
    $rand5 = $rand4;
    $rand4 = $rand3;
    $rand3 = $rand2;
    $rand2 = $laikinas;
} else if ($rand6 > $rand3) {
    $rand6 = $rand5;
    $rand5 = $rand4;
    $rand4 = $rand3;
    $rand3 = $laikinas;
} else if ($rand6 > $rand4) {
    $rand6 = $rand5;
    $rand5 = $rand4;
    $rand4 = $laikinas;
} else if ($rand6 > $rand5) {
    $rand6 = $rand5;
    $rand5 = $laikinas;
}

echo "<br> Isrikiavimas nuo didziausio iki maziausio (be 'for' ir masyvo): <br>";
echo "$rand1, $rand2, $rand3, $rand4, $rand5, $rand6";






?>