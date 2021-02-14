<?php
// $name = "Zura";
// $string = 'Hello I am' . $name . 'Im 28 year old';
// $string2 = "Helo I am $name. Im 25 years old";
// echo $string . '<br>';
// echo $string2 . '<br>';

// echo 'Hello '.'World '.'and PHP '.'<br>';
// $string ="     Hello World I am     ";

// echo "1 - ". strlen($string) . '<br>';
// echo "2 - ". trim($string) . '<br>';
// echo "3 - ". ltrim($string) . '<br>';
// echo "4 - ". rtrim($string) . '<br>';
// echo "5 - ". str_word_count($string) . '<br>';
// echo "6 - ". strrev($string) . '<br>';
// echo "7 - ". strtoupper($string) . '<br>';
// echo "8 - ". strtolower($string) . '<br>';
// echo "9 - ". ucfirst('hello') . '<br>';
// echo "10 - ". lcfirst('HELLO') . '<br>';
// echo "11 - ". ucwords('hello world') . '<br>';
// echo "12 - ". strpos($string, 'World') . '<br>';
// echo "13 - ". stripos($string, 'world') . '<br>';
// echo "14 - ". substr($string, 6, 8) . '<br>';
// echo "15 - ". str_replace('World', 'PHP', $string) . '<br>';
// echo "16 - ". str_ireplace('world', 'PHP', $string) . '<br>';

$longText = "
    Hello, my name is Zura
    I am 27,
    I love my daughter
";
echo $longText.'<br>';
echo nl2br($longText).'<br>';

?>