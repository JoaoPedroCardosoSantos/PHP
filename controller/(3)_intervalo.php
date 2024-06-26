<?php
// Função para gerar e retornar uma lista de números no intervalo
function gerar_lista_intervalo($numero1, $numero2) {
    $numeros = array();

    if ($numero1 < $numero2) {
        for ($i = $numero1 + 1; $i < $numero2; $i++) {
            $numeros[] = $i;
        }
    } elseif ($numero1 > $numero2) {
        for ($i = $numero2 + 1; $i < $numero1; $i++) {
            $numeros[] = $i;
        }
    }

    return $numeros;
}

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

// Chamar a função para gerar a lista de números no intervalo
$numeros_intervalo = gerar_lista_intervalo($numero1, $numero2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Lista de Números no Intervalo</title>
    <style>
        .text-center {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<a href="../view/exerciciosLoops/(3)_intervalo.html" id="arrow" class="align-self-start fs-2 mt-5 ms-5">
      <i class="bi bi-arrow-left m-3"> </i>
    </a>
    <h2 class="text-center">Lista de Números no Intervalo</h2>
    <ul class="text-center">
        <?php
        // Exibir os números na lista
        foreach ($numeros_intervalo as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>
</body>
</html>
