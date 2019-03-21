<?php

if(isset($_GET["calificacion"])){
  $calificacion= $_GET["calificacion"];
} else {
  $calificacion= 0;
}



if(isset($_GET["conducta"])){
  $conducta= $_GET["conducta"];
} else {
  $conducta= 0;
}

//$calificacion= 10;

switch (true) {
  case ($calificacion == 6) && ($conducta == 6):
  echo "Suficiente";
  break;

  case ($calificacion == 7) && ($conducta == 7):
  echo "Aprobado";
  break;

  case ($calificacion == 8) && ($conducta == 8):
  echo "Bien";
  break;

  case ($calificacion == 9) && ($conducta == 9):
  echo "Muy Bien";
  break;

  case ($calificacion == 10) && ($conducta == 10):
  echo "Excelente";
  break;

  default:
  echo "Recursar";
}







?>
