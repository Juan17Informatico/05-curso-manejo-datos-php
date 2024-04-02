<?php

echo "<h1>Comparación</h1>";

$courses = ["javascript", "php"];
$wishes = ["php", "laravel", "javascript", "vue"];

echo "<pre>";
// var_dump(array_diff($wishes, $courses));

$arrayA = [1, 2, 3, 4, 5, 6, 7];
$arrayB = [1, 2, 3, 85, 6, 7];

var_dump(array_diff($arrayA, $arrayB));

echo "</pre>";


echo "<h2>Union</h2>";
$frontend = [
    "frontend" => 'javascript'
];
$backend = [
    "framework" => 'php',
    "framework" => "laravel"
];

echo "<pre>";


// var_dump(array_merge($frontend, $backend));
var_dump(array_merge_recursive($frontend, $backend));

echo "</pre>";
