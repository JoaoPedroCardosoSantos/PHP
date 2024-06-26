<?php
include "../view/exerciciosLoops/intervalo.html";
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $joaofaro = 0;
    $interval_25_50 = 0;
    $interval_50_75 = 0;
    $interval_75_100 = 0;

    for ($i = 1; $i <= 20; $i++) {
        if (isset($_POST["n$i"]) && is_numeric($_POST["n$i"])) {
            $valor = floatval($_POST["n$i"]);
            if ($valor >= 0 && $valor <= 25) {
                $joaofaro++;
            } elseif ($valor > 25 && $valor <= 50) {
                $interval_25_50++;
            } elseif ($valor > 50 && $valor <= 75) {
                $interval_50_75++;
            } elseif ($valor > 75 && $valor <= 100) {
                $interval_75_100++;
            }
        }
    }
    echo "<h2>Resultados</h2>";
    echo "<p>Intervalo [0, 25]: $joaofaro</p>";
    echo "<p>Intervalo (25, 50]: $interval_25_50</p>";
    echo "<p>Intervalo (50, 75]: $interval_50_75</p>";
    echo "<p>Intervalo (75, 100]: $interval_75_100</p> Feito por João Faro";
} else {
    echo "Nenhum dado enviado.";
}



?>
