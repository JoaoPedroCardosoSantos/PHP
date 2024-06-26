<?php

include "../view/(6)terreno.html";

/* Um servente, deverá roçarum determinado terreno, para montar o orçamento deve saber 
a quantidade em metros do terreno, sendo este um retânguloe tendo como comprimento de um 
dos lados a medida de 45 metros e de largura de um dos lados a medida de 20 metros. 
Calcule o total em metros do terreno, e o valor total para roçar, sabendo que por metro o 
servente cobra R$ 12,00 */

$largura = 20;
$comprimento = 45;

$area  = $largura*$comprimento;
$custo = $area * 12.00;

echo
"<div class='card mt-4 bg-light ' style='width: 18rem'>
<div class='card-body'>
    <p class='card-text text-dark'>
    Largura do Terreno: $largura.m
    Comprimento do Terreno: $comprimento.m
    Área do Terreno: $area.m
    Custo Final: R$ $custo    
    </p>
</div>
</div>
<p class='align-self-end align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
";