<?php
include "../view/exerciciosLoops/(6)numeroPrimo.html";
$num1 = intval($_POST['num1']);

$isPrime = true;

if ($num1 <= 1) {
    $isPrime = false;
} else {

    for ($i = 2; $i * $i <= $num1; $i++) {
        if ($num1 % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    $resultado = "é Primo";
} else {
    $resultado = "não é Primo";
}

echo "<div class='card mt-4 bg-light text-center position-absolute start-50 translate-middle' style='width: 18rem;'>
        <div class='card-body'>
            <p class='card-text text-dark'>
                O número $num1 $resultado
            </p>
        </div>
        <p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
      </div>";
?>
