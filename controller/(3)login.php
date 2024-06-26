<?php

include "../view/(3)login.html";

$senha = $_POST['senha'];


if ($senha == "1234") {
    $resultado = "Acesso Permitido";
}
else{
    $resultado = "Acesso Negado";
}


echo
"<div class='card mt-4 bg-light' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
            $resultado
        </p>
    </div>
</div><p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
    }";