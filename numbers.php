<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;


// Arithmetic operations
echo ($a + $b) * $c. '<br>';
echo $a % $b. '<br>';

// Assignment with math operators
$a += $b; echo $a. '<br>';

// Increment operator
$a++;
++$a;

// Decrement operator
$b--;
--$b;

// Number checking functions
is_float(1.25);
is_int(5);

// Conversion
$strNumber = '12.34';
var_dump($strNumber);
echo '<br>';
$number = intval($strNumber);
var_dump($number);
echo '<br>';

// Number functions
echo "abs(-5) ".abs(-5) . '<br>';
echo "pow(2, 3) " . pow(2, 3) . '<br>';
echo "sqrt(16) ". sqrt(16) .'<br>';
echo "floor(2.6) ". floor(2.6) . '<br>'; //Round fractions down
echo "ceil(2.4) ". ceil(2.4) . '<br>';
echo "intval(2.4) ". intval(2.4) . '<br>'; //Get the integer value of a variable


// Formatting numbers
$number2 = 123456789.12345;
echo number_format($number2, 2, ',',' ');


// https://www.php.net/manual/en/ref.math.php

?>
