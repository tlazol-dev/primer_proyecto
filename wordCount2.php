<?php


$text= "Los errores Http son problemas de comunicación, ya sea por lado del cliente o del servidor. Pero este error viene acompañado de los códigos de estado Http, que son los mensajes numéricos que recibimos por parte del servidor explicandonos que existe un problema por el cual no podemos acceder a la información que buscamos. Normalmente ese código de estado es invisible de cara al usuario que está visitando la web. Solo en caso de que se produzca un error en la carga es posible que en el navegador se muestre el tipo de error que se está produciendo.";


function getCount($text){

  $no = array(",", ".");
  $replace = array("","");
  $count= 0;
  $howOften= [];

  $cleanText= str_replace($no, $replace, $text);
  $palabras= explode(" ",$cleanText);

    foreach ($palabras as  $value) {
        if(isset($howOften[$value])){
          $howOften[$value]+=1;
        } else {
          $howOften[$value]=1;
        }
    }
      return $howOften;
}



echo "<pre>", print_r(getCount($text)),"</pre>";

?>
