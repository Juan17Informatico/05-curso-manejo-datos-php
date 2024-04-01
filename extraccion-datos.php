<?php

// $data = 'Estudio PHP'; 
// //echo #data{0};



// $post = "lorem impsum dolor sit amet consectertur adipiscicin elit"; 
// $extract = substr($post, 0, 20); 

// echo "$extract... [ver más]"; 



// $data = 'javascript, php, laravel'; 
// $tags = explode(', ', $data);

// echo "<pre>";
// var_dump($tags);
// echo "</pre>"; 


// $courses = ['javascript', 'php', 'laravel']; 

// echo implode(", ", $courses); 


// $course = " Curso de PHP "; 
// $course = trim($course); 
// echo "<pre>";

// echo "Quiero aprender $course, y otra cosa"; 

// echo "</pre>"; 

//Array
$nombres = [
    " pepito ",
    " juancito ",
    " cucumaya ",
    " xd "
]; 
//El Antes
echo "<pre>"; 
var_dump($nombres); 
echo "</pre>";

function quitarEspacios($array){
    $result = []; 
    foreach ($array as $value) {
        $result[] = trim($value); 
    }

    return $result; 
}
//El después
echo "<pre>"; 
var_dump(quitarEspacios($nombres)); 
echo "</pre>";



