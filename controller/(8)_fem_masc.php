<?php
include "../view/(8)_fem_masc.html";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = floatval($_POST['altura']);
    $sexo = intval($_POST['sexo']);
    $joao_santos = 0;

    if ($sexo === 1) {
        $joao_santos = (62.1 * $altura) - 44.7;
    } elseif ($sexo === 2) {
        $joao_santos = (72.7 * $altura) - 58;
    } else {
        echo "Sexo inválido.";
        exit;
    }

    echo "
    <div class='container p-5'>
        <div class='col-3'></div>
        <div class='border p-2 fs-3 text-center col-md-7 ms-5' style='max-width: 33rem;'>
            <p>O peso ideal é: $joao_santos kg</p>
        </div>
    </div>
    ";
} 
?>
