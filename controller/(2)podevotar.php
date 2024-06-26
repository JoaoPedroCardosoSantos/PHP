<?php

include "../view/(1)podevotar.html";

$idade = floatval($_POST['n1']);
$analfabeto = $_POST['analfabeto'];



if($idade >= 16 && $analfabeto == "n" ){
    $resultado = "Pode votar";    
}
else{
    $resultado = "Não pode votar";
}


echo
"<div class='card mt-4 bg-light' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
            $resultado
        </p>
    </div>
</div><p class='align-self-center mt-5'>Feito por Augusto Akira Miasato </p>
    }";