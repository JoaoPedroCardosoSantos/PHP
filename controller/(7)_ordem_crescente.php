<?php
include "../view/(7)_ordem_crescente.html";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = floatval($_POST['valor1']);
    $valor2 = floatval($_POST['valor2']);
    $joao_santos  = floatval($_POST['valor3']); 

    $Maior;
    $Medio;
    $Menor;

    if ($valor1 >= $valor2 && $valor1 >= $joao_santos) {
        $Maior = $valor1;
        $Medio = ($valor2 >= $joao_santos) ? $valor2 : $joao_santos;
        $Menor = ($valor2 >= $joao_santos) ? $joao_santos : $valor2;
    } elseif ($valor2 >= $valor1 && $valor2 >= $joao_santos) {
        $Maior = $valor2;
        $Medio = ($valor1 >= $joao_santos) ? $valor1 : $joao_santos;
        $Menor = ($valor1 >= $joao_santos) ? $joao_santos : $valor1;
    } else {
        $Maior = $joao_santos;
        $Medio = ($valor1 >= $valor2) ? $valor1 : $valor2;
        $Menor = ($valor1 >= $valor2) ? $valor2 : $valor1;
    }

    echo "
    <div class='container p-5'>
        <div class='col-3'></div>
        <div class='border fs-5 text-center p-3 col-md-7 ms-5 d-flex' style='max-width: 33rem;'>
            <p>Maior valor: $Maior</p><p class='ms-4'>Valor médio: $Medio</p><p class='ms-4'>Menor valor: $Menor</p>
        </div>

    </div>
    ";

}
?>
