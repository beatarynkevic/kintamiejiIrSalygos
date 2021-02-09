<?php

// What is a variable

// Variable types

// Declare variables
$name = 'Beata';
$age = 26;
$isFemale = true;
$height = 1.73;
$salary = null;

// Print the variables. Explain what is concatenation. Concatenation operator ('.')
echo $name . '<br>';
echo $age . '<br>';
echo $isFemale . '<br>'; //when boolean converted to string when we want to print is true is 1, false is empty string

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isFemale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name);
echo '<br>';
var_dump($age);
echo '<br>';
var_dump($isFemale);
echo '<br>';

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name).'<br>';

// Variable checking functions
is_string($name); //false
is_int($age); //true


// Check if variable is defined
isset($name); //chceck if variable is defined
isset($adress);

// Constants
define('PI', 3.14);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX.'<br>';

?>