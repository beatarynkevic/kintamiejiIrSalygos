<?php
$fruits = ["orange", "banana", "apple"];
echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo $fruits[1].'<br>';

$fruits[0]= 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

isset($fruit[2]); //true
//isset($fruit[3]); false

$fruits[] = 'Banana';
echo count($fruits) . '<br>';
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';


echo array_pop($fruits); //remove last element froma array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

array_unshift($fruits, 'bar'); //adds firs elemnt of array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo array_shift($fruits); //remove from the beginning of array

$string = "Banana, Apple, Peach"; //split the string into an arrat
explode(" ", $string);
echo '<pre>';
var_dump(explode(", ", $string));
echo '</pre>';




?>