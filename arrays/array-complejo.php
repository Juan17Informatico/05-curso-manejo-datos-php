<?php

//Array asociativos: 

$courses = [
    "Nivel 1" => "PHP - Basico",
    "Nivel 2" => "PHP - Intermedio"
];

// echo "<pre>";
// var_dump($courses); 
// echo "</pre>"; 

foreach ($courses as $nivel => $curso) {
    echo "$nivel: $curso <br/>";
}

function upper($course)
{
    echo strtoupper("<br/>$course");
}
array_walk($courses, 'upper');


/**
 * array_key_exists('Nivel 1', $courses);
 * in_array('PHP - Basico', $courses);
 * array_keys($courses);
 * array_values($courses) ;
 */


//Array
$numeros = [];

for ($i = 1; $i < 10; $i++) {
    $numeros[$i] = $i + 1;
}

echo "<pre>";
var_dump($numeros);
echo "</pre>";

/*
array(9) {
    [1]=>
    int(2)
    [2]=>
    int(3)
    [3]=>
    int(4)
    [4]=>
    int(5)
    [5]=>
    int(6)
    [6]=>
    int(7)
    [7]=>
    int(8)
    [8]=>
    int(9)
    [9]=>
    int(10)
}
*/