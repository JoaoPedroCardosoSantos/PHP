<?php
include "../view/(2)_conversao.html";
if (isset($_POST['submit'])) {
$nome = $_POST['txtnome'];
$dollar = $_POST['txtdollar'];
$real = $_POST['txtreal'];

$valor_dollar = $real / $dollar;

echo "";
echo "";
echo "";
echo "";

echo
"<div class='card bg-light position-absolute top-100 start-50 translate-middle' style='width: 18rem;'>
    <br>
    <div class='card-body'>
        <p class='card-text text-dark'>
        Nome do usuário: $nome<br>
        Valor em real: $real<br>
        Dollar hoje: $dollar<br>
        Valor em dollar: $valor_dollar<br>
        </p>
    </div>
</div>";
}
?>
