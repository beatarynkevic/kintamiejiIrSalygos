<?php
$fruits = ["orange", "Kivi", "Apple"];
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

//combine array elements into string
echo implode("&", $fruits);

//chceck if element exist in the array
echo '<pre>';
var_dump(in_array('apple', $fruits));
echo '</pre>';

//search element index in the array
echo '<pre>';
var_dump(array_search('Peach', $fruits));
echo '</pre>';

//merge two arrays
$vegetables = ["Potato", "cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

rsort($fruits);
?>