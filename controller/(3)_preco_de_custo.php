<?php
$nome = $_POST['txtnome'];
$valor = $_POST['txtvalor'];
$embalagem = $_POST['txtembalagem'];
$lucro_percentual = $_POST['txtlucro'];

$custo = $valor + $embalagem + 12.00;
$lucro = (($lucro_percentual / 100) * $custo) + $custo;

echo "Nome do produto: $nome<br><br>";
echo "Custo do produto: $custo,00<br><br>";
echo "Valor de entrega: R$ 12,00<br><br>";
echo "Valor final com lucro de $lucro_percentual% igual à: R$ $lucro,00";
?>