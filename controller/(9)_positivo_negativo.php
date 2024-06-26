<?php
include "../view/(9)_positivo_negativo.html";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $joao_santos = floatval($_POST['numero']);
    $valor = "";

    if ($joao_santos < 0) {
        $valor = "Negativo";
    } else {
        $valor = "positivo";
    }


    echo "
    <div class='container p-4'>
        <div class='col-3'></div>
        <div class='border p-2 fs-3 text-center col-md-7' style='max-width: 38rem;'>
            <p>Valor digitado é $valor !</p>
        </div>
    </div>
    ";
}
?>
