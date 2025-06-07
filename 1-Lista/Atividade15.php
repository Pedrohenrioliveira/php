<?php

$preco_base = $_GET["a"];
$taxa_imposto = $_GET["b"];

$preco_final = $preco_base * (1 + $taxa_imposto /100 );
$valor_do_imposto = $preco_final - $preco_base;

echo " Valor base ".number_format($preco_base, 2,',','');
echo" taxa de imposto $taxa_imposto% ";
echo" Valor do imposto ".number_format($valor_do_imposto, 2,',','');
echo" Preço final ".number_format($preco_final, 2,',','');
?>