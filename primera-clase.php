<?php
    
// echo 'Un texto de una línea
// varías líneas'; 

// $courses = [
//     'backend' => [
//         'php',
//         'laravel'
//     ]
// ]; 

// class User {
//     public $name = 'Juan'; 
// }


// $user = new User; 

// echo "$user->name quiere aprender {$courses['backend'][0]}"; 


$teacher = 'ITalo'; 
$italo = 'Profesor de PHP'; 

echo "$teacher es $italo";


function getTeacher(){
    return 'techear'; 
}

echo "${getTeacher()} enseña PHP"; 