<?php
include "../view/exerciciosLoops/(2)parImpar.html";
$valores = [];
for ($i = 1; $i <= 10; $i++) {
    $valores[] = $_POST['num' . $i];
}
$valPar = [];
$valImpar = [];

foreach ($valores as $val) {
    if ($val % 2 == 0) {
        $valPar[] = $val;
    } else {
        $valImpar[] = $val;
    }
}

echo "<div class='card mt-4 bg-light text-center align-self-center' style='width: 18rem'>
        <div class='card-body'>
            <p class='card-text text-dark'>
                Valores Pares: " . implode(", ", $valPar) . "<br>
                Valores Ímpares: " . implode(", ", $valImpar) . "
            </p>
        </div>
      </div>
      <p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>";
?>
