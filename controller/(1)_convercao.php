<?php

$nome = $_POST['txtnome'];
$dollar = $_POST['txtdollar'];
$real = $_POST['txtreal'];

$valor_dollar = $real / $dollar;

echo "Nome do usuário: $nome<br>";
echo "Valor em real: $real<br>";
echo "Dollar hoje: $dollar<br>";
echo "Valor em dollar: $valor_dollar";
