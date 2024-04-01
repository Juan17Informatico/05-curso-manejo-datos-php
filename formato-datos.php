<?php

/**
 *  || Alterar ||
 * 
 * */
// $text = "PHP es UN LENGUAJE";
// echo strtolower($text);

// $text2 = "html es...";
// echo strtoupper($text2);

// $text3 = "html es...";
// echo ucfirst($text3);

// $text4 = "HTML es...";
// echo lcfirst($text4);

/**
 * || Reemplazar ||
 * 
 * */
// $mejorSuper = "El mejor superheroe es spiderman"; 
// $slug = str_replace('spiderman', 'Capitan america', $mejorSuper); 
// echo $slug; 

/**
 * || Modificar ||
 * 
 */

// $code = 39; 
// echo str_pad($code, 8, '#', STR_PAD_BOTH); 


//Eliminar etiquetas
// $text = "<h1>Hola como estás</h1>"; 
// echo strip_tags($text); 


//Formatear datos

$string = "esto es un string, año 2023, ád";
// echo strtoupper($string);  //monobyte
echo mb_strtoupper($string); // multibyte