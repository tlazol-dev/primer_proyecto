<?php

// if(isset($_GET["x"])){
//   $x= $_GET["x"];
// } else {
//   $x= 0;
// }
//
//
//
// function getFiboSecuence($x){
//
//   $num= 0;
//   $num1= 1;
//   $suma= 0;
//   $fiboArr= [];
//
//
//   for($i= 0; $i < $x; $i++){
//
//   $suma= $num +$num1;
//   $num= $num1;
//   $num1= $suma;
//   array_push($fiboArr, $suma);
//   }
//   array_unshift($fiboArr, 0);
//   return $fiboArr;
// }
//
// echo "<pre>", print_r(getFiboSecuence($x)), "</pre>";

//----------------------------------------------------------

//llenar un array con un valor determinado indicando el incio y fin de las pociones a llenar

// $arrOfNames= array_fill(0,7,"Berenice");
// print_r($arrOfNames);

//----------------------------------------------------------
//elimina un elemento y reordena los indices del array
//
// $x = array(1, 2, 3, 4, 5);
// //var_export($x);
//
// unset($x[2]);
// //var_export($x);
// $x= array_values($x);
// var_export($x)

//----------------------------------------------------------

// $colors = array('white', 'green', 'red');
// 	sort($colors);
// 	print_r($colors);
//     echo "<ul>";
//     foreach($colors as $x){
//         echo "<li>$x</li>";
//     }
//     echo "</ul>"
//----------------------------------------------------------

// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
//
// $first= $color[4];
// echo $first."\n";
//
// //o puede usarse reset Establece el puntero interno de un array a su primer elemento
// echo reset($color);
//----------------------------------------------------------
//DECODIFIC EL SIGUIENTE DATO JSON
// si el json viene de otro archivo se exporta así:
// $json= file_get_contents( __DIR__ . "/array.json" );
// $json_libros= json_decode($json, true);
// print_r($json_libros);
// echo "<br/>";
// var_export($json_libros);

// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown

// function decodifica($value,$key)
// {
// echo "$key : $value"."<br/>";
// }
// $libro = '{"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail":
// {
// "Publisher": "Little Brown"
//  }
//   }';
// $json_libros = json_decode($libro,true);
// array_walk_recursive($json_libros,"decodifica");

//----------------------------------------------------------

// $numeros= array ('3','56','41','9','17');
// $nuevoArray= [];
//
// $insertar= '%';
// array_splice($numeros,3,0,$insertar);
// echo " \n After inserting '$' the array is : ";
//   foreach($numeros as $numero){
//     echo "$numero ";
//   }

//----------------------------------------------------------
//
// $orderByAgeAsc= [];
// $orderByAgeDes= [];
// $orderByNameAsc= [];
// $orderByNameDes= [];
//
// $persona= array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// asort($persona);
// //print_r($persona);
//   foreach($persona as $keyName => $valueAge){
//     $aux= "La edad de ".$keyName." es: ".$valueAge."<br/>";
//     array_push($orderByAgeAsc,$aux);
//   }
// //echo "<pre>",print_r($orderByAgeAsc),"<pre/>";
//
// arsort($persona);
// //print_r($persona);
//    foreach($persona as $keyName => $valueAge){
//      $aux= "La edad de ".$keyName." es: ".$valueAge."<br/>";
//      array_push($orderByAgeDes,$aux);
//   }
// //echo "<pre>", print_r($orderByAgeDes),"<pre/>";
//
// asort($persona);
// ksort($persona);
// //print_r($persona);
//   foreach ($persona as $keyName => $valueAge) {
//     $aux= "La persona ".$keyName." tiene ".$valueAge." años,<br/>";
//     array_push($orderByNameAsc, $aux);
//   }
// //echo "<pre>", print_r($orderByNameAsc),"<pre/>";
//
// //print_r($persona);
// arsort($persona);
// //print_r($persona);
// //echo "<br/>";
// //echo "<br/>";
// ksort($persona);
// //print_r($persona);
//
//   foreach ($persona as $keyName => $valueAge) {
//      $aux= "La persona ".$keyName." tiene ".$valueAge." de edad,<br/>";
//      array_push($orderByNameDes, $aux);
//   }
// echo "<pre>", print_r($orderByNameDes),"<pre/>";

//----------------------------------------------------------

//
// $num= $_GET["num"];
// //inicalmente definimos la variable de resultado como true
// $isPrime= true;
//
// //iteramos sobre la cadena de numeros que va de 2 a un numero antes del que se establecio como parametro(pe.7)
// //iniciamos en 2 dado que queremos comprobar si un numero es primo y dividido entre uno siemmpre dara true
// for($i= 2; $i < $num; $i++){
//     // almacenamos en una variable el residuo del parametro entre cada numero evaluado(2-6)
//     $residuo= $num % $i;
//
//     // si este residuo es igual a 0 nos indica que ha encontrado un numero entre el cual se puede dividri el parametro, esto no cumple la condicion para ser priimo pues estamps excluyendo de la evaluacion el num 1 y el num 7
//     if( $residuo == 0 ){
//         $isPrime= false;
//     }
//
// }
// // imprimimos es primo para true y nos es primo para el caso contrario
// if($isPrime){
//     echo "es primo";
// } else {
//     echo "no es primo";
// }

//----------------------------------------------------------

$temperatura= "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

$suma= 0;
$tempArr= explode(",", $temperatura);

$tempArrLength= count($tempArr);
$suma= array_sum($tempArr);

$temp_prom= $suma/$tempArrLength;
$temp= number_format($temp_prom);
$tempMin= [];
$tempMax= [];
echo "La temperatura promedio es ".$temp." grados <br/>";
echo "<br/>";
$tempArr= array_unique($tempArr);
sort($tempArr);
  //echo "<pre>",print_r($tempArr),"<pre/>";
    for($i= 0; $i < 5; $i++){
      $aux= $tempArr[$i].",";
      array_push($tempMin,$aux);
     }
   echo "Las 5 temperaturas mas bajas son: ";
   echo "<pre>",print_r($tempMin),"<pre/>";


   $arrRev= array_reverse($tempArr);
   //print_r($arrRev);

   for($x= 0; $x < 5; $x++){
      $aux= $arrRev[$x].",";
      array_push($tempMax, $aux);
    }
  echo "Las 5 temperaturas mas altas son: ";
  echo "<pre>",print_r($tempMax),"<pre/>";




















?>
