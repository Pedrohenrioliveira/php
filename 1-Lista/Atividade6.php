<?php

$valor_original = $_GET["a"];
$percentual_desconto = $_GET["b"];

$novo_valor = $valor_original * (1 + $percentual_desconto /100 );
$valor_do_desconto = $novo_valor - $valor_original;

echo " Valor Antigo ".number_format($valor_original, 2,',','');
echo" Porcentual de aumento $percentual_desconto% ";
echo" Valor do Desconto ".number_format($valor_do_desconto, 2,',','');
echo" valor final ".number_format($novo_valor, 2,',','');

?>