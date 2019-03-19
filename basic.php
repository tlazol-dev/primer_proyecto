<?php
//Cree un script PHP que muestre el capital y el nombre del país de la matriz anterior $ ceu. Ordenar la lista por la capital del país
//output a capital de los Países Bajos es Ámsterdam
//La capital de Grecia es Atenas
//La capital de Alemania es Berlín

$ceu = array (
  "Italy"=>"Rome",
  "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels",
  "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki",
  "France" => "Paris",
  "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana",
  "Germany" =>"Berlin",
  "Greece" =>"Athens",
  "Ireland"=>"Dublin",
  "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon",
  "Spain"=>"Madrid",
  "Sweden"=>"Stockholm",
  "United Kingdom"=>"London",
  "Cyprus"=>"Nicosia",
  "Lithuania"=>"Vilnius",
  "Czech Republic"=>"Prague",
  "Estonia"=>"Tallin",
  "Hungary"=>"Budapest",
  "Latvia"=>"Riga",
  "Malta"=>"Valetta",
  "Austria" => "Vienna",
  "Poland"=>"Warsaw"
  );

  //ordenamos el array
  asort($ceu);
  //declaramos un string vacio que posteriormente contendrá la salida esperada
  $finalText= "";
  // dado que tenemos un array asociativo conviene usar ofreach para iterrar sobre sus elementos
  foreach($ceu as $keyCountry => $capValue){
    //creamos una variable para contener la primera parte del string y que almacena el resultado de la iteracion
    $country= "La capital de ".$keyCountry;
    //concatenamos a la variable de salida el valor de country (pais)
    $finalText.=$country;
    //creamos otra variable para contener la segunda parte del strin (ciudad)
    $capital= " es ".$capValue;
    //concatenamos a la variable de salida el valor de capital
    $finalText.=$capital."<br/>";
  }
    //
    echo $finalText;



  // foreach($ceu as $keyCountry => $capValue){
  //   echo "La capital de $keyCountry es $capValue"."<br/>";
  // }
?>
