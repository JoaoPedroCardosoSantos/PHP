<?php

include "../view/(1)maiormenor.html";

$n1 = floatval($_POST['n1']);
$n2=floatval($_POST['n2']);
$n3=floatval($_POST['n3']);
$n4=floatval($_POST['n4']);


$maior = $n1;
$menor = $n2;

if($n3 > $maior){
    $maior = $n3;
}
if($n4 > $maior){
    $maior = $n4;
}
if($n1 < $menor){
    $menor = $n1;
}
if($n2 > $maior){
    $n2 = $maior;
}
if($n3 < $menor){
    $n3=$menor;
}
if($n4 < $menor){
    $n4 = $menor;
}

echo
"<div class='card mt-4 bg-light' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
            O maior valor é: $maior<br>
            O menor valor é: $menor<br>
        </p>
    </div>
</div><p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
    }";