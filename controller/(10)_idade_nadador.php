<?php
include "../view/(10)_idade_nadador.html";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = intval($_POST['idade']);
    $joao_santos = "";

    if ($idade >= 18) {
        $joao_santos = "Adulto";
    } elseif ($idade >= 14) {
        $joao_santos = "Juvenil";
    } elseif ($idade >= 9) {
        $joao_santos = "Infantil";
    } else {
        $joao_santos = "Mirim";
    }

    echo "
        <div class='container p-5'>
            <div class='col-3'></div>
            <div class='border p-2 fs-3 text-center col-md-7' style='max-width: 38rem;'>
                <p>A categoria do nadador é: $joao_santos</p>
            </div>
        </div>
        ";
}
?>
