<?php

$courses = [

    "php",
    "javascript",
    "laravel"

];

// rsort($courses);
// krsort($courses);
// sort($courses);

// echo "<pre>";
// var_dump($courses);
// echo "</pre>";



// var_dump(array_slice($courses, 1));
echo "<pre>";
var_dump(array_chunk($courses, 2));
echo "</pre>";



// array_shift($courses); 
// array_unshift($courses); 
// array_pop($courses); 
// array_push($courses); 
// array_flip($courses); 