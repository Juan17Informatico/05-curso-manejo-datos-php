<?php

//Valores
function greet($name)
{
    return "Hola, $name!";
}

echo greet("Juan") . "<br/>";


//Referencias
$course = 'PHP';
function path($course)
{
    $course = "Laravel";
    echo "<br/> Laravel: $course";
}

path($course);
echo "<br/> Curso: $course";


//Predeterminado 
echo "<h2>Predeterminado</h2>";

function greet2($name = "Juan")
{
    return "Hola, $name";
}

echo greet2(). "<br/>";
echo greet2("Campuzano");
