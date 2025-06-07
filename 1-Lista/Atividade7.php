<?php

$salario_base = $_GET["a"];
$percentual_aumento = $_GET["b"];

$novo_salario = $salario_base * (1 + $percentual_aumento /100 );
$valor_do_aumento = $novo_salario - $salario_base;

echo " Salario Inicial ".number_format($salario_base, 2,',','');
echo" Porcentual do aumento $percentual_aumento% ";
echo" Aumento do salario ".number_format($valor_do_aumento, 2,',','');
echo" Novo salario ".number_format($novo_salario, 2,',','');

?>