<?php

$preco_produto1 = $_GET["a"];
$quantidade_produto1 = $_GET["b"];
$preco_produto2 = $_GET["c"];
$quantidade_produto2 = $_GET["d"];

$total1 = $preco_produto1 * $quantidade_produto1;
$total2 = $preco_produto2 * $quantidade_produto2;

$total_do_carrinho = $total1 + $total2;

echo "O valor total do seu carrinho é $total_do_carrinho";
?>