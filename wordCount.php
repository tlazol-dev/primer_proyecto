<?php

if(isset($_GET["text"])){
  $text= $_GET["text"];
} else {
  $text= "";
}

$text= "Obtén recomendaciones personalizadas
Responde a unas cuantas preguntas sobre tus temas favoritos.";



function getCount($text){
  $no = array(",", ".");
  $replace = array("","");
  $count= [];
  $howOften= [];
  $cleanText= str_replace($no, $replace, $text);
     // print_r($cleanText);

  $palabras= explode(" ",$cleanText);
  //print_r($palabras);

    foreach($palabras as $palabra){
       $count= array_count_values($palabras);

     }
      $howOften= print_r($count);
      return $howOften;
}

echo "<pre>", print_r(getCount($text)),"</pre>";
