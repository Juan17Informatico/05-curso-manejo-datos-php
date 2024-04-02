<?php

//Función anonima
// $greet = function ($name = "Default"){
    // return "Hola, $name"; 
// };

// echo $greet("Juan");

function greet(Closure $lang, $name){
    return $lang($name);
}

$es = function ($name){
    return "Hola, $name"; 
}; 

$en = function ($name){
    return "Hello, $name"; 
};


echo greet($en, "Lina"); 