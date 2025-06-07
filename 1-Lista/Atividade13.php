<?php

$temperatura_celsius = $_GET["a"];

$temperatura_fahrenheit = ($temperatura_celsius * 9/5) + 32;

echo "A temperatura celsius $temperatura_celsius convertirada para fahrenheit é $temperatura_fahrenheit";

?>