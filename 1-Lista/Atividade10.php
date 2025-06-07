<?php

$peso = $_GET["a"];
$altura = $_GET["b"];

$imc = $peso / ($altura * $altura) ;

echo "Seu IMC é:".number_format($imc, 1,'.','');

?>