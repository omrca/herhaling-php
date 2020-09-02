<?php

//$getal = 7;

//is_int($getal);

//echo is_int($getal);

//$klas=["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

//var_dump($klas);

//for($i=0; $i < count($klas); $i++){
//  echo $klas[$i], PHP_EOL;
//}

$bucket_list = array("Sporten", "Op vakantie gaan", "Dansen");

$hoeveelheid_activiteiten = $_GET[""];

//for($bucket_list as $i => $n){
//  echo "welke activiteiten wil je toevoegen?" .$n. "";
//}

for($i=0; $i < count($bucket_list); $i++){
  echo "welke activiteiten wil je toevoegen?" .$bucket_list[$i]. "" ;
}


?>
