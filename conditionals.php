<?php
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],

];

foreach($person as $key => $value) {
    if(is_array($value)) {
        echo $key .' '. implode(",", $value) .'<br>';
    } else {
        echo $key .' '. $value . '<br>';
    }
}


// function sum(...$nums)
// {
//     $sum = 0;
//     foreach($nums as $value) {
//         $sum += $value;
//     }

//     return $sum;
// }

// echo $sum(1, 2, 3, 4, 5);


//arrow function

function sum(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo $sum(1, 2, 3, 4, 5);
?>