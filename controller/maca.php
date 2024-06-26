<?php
    include "../view/(4)_maca.html";
    
    $JoaoF = $_POST['txtquantidade'];


    if ($JoaoF >= 12) {
    $valorMaca = 0.25;
    } else{
    $valorMaca = 0.30;
    }
    $precoFinal = $valorMaca * $JoaoF;
    echo "
    <div class='card mt-4 bg-light ' style='width: 18rem'>
        <div class='card-body'>
            <p class='card-text text-dark'>
            Você comprará $JoaoF maças por: $precoFinal
            </p>
        </div>
    </div>
    <p class='align-self-end align-self-center mt-5'>Feito por João Faro</p>";