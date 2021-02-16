//associative array 
//Associative arrays are arrays that use named keys that you assign to them

<?php
$age =["Petras" => "35", "Ben" => "37", "Joe" => "43"];

$age2['Petras'] = "35";
$age2['Ben'] = "37";
$age2['Joe'] = "43";

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobies' => ['Tennis', 'Video Games']
];

echo '<pre>';
print_r($person);
echo '</pre>';

// if(!isset($person['adress'])) {     //Determine if a variable is declared
//     $person['address'] = 'unknown'; //if not, uzssetinam
// }

$person['adress'] ??= 'unknown'; 

echo '<pre>';
print_r($person);



?>