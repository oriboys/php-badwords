<?php

$meteo = $_GET['badword'];
$frase = "Oggi il meteo sarà: " . $meteo;
echo $frase;
$lunghezzaFrase = strlen($frase);
echo ' ----> ' .'questa frase è lunga ' . $lunghezzaFrase . ' parole';
$indice = strpos($frase, $meteo);
echo '<br>';
$arraycorretta = explode(":", $frase);
echo 'il valore dinamico corrispondente alla parola' .$arraycorretta[1] .' inizia alla posizione ' .$indice;
echo '<br>';
$frase = str_replace($meteo, '***',  $meteo);
$frase = "Oggi il meteo sarà: " . $frase;
echo $frase ;
echo '<br>';
echo '<br>';
$arrayProva = [1, 2, 3, 4, 5];
var_dump($arrayProva);

 ?>
