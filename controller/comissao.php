<?php
include "../view/(7)comissao.html";
    if (isset($_POST['submit'])) {
        $vendas1 = floatval($_POST['vendas1']);
        $vendas2 = floatval($_POST['vendas2']);
        $vendas3 = floatval($_POST['vendas3']);

        $comissao1 = $vendas1 * 0.12;
        $comissao2 = $vendas2 * 0.12;
        $comissao3 = $vendas3 * 0.12;

        $totalComissao = $comissao1 + $comissao2 + $comissao3;


        echo
"<div class='card mt-4 bg-light' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
        Vendedor 1: {$_POST['nome1']} e seu total de Vendas do Mês foi: R$$vendas1 e sua comissão foi de R$$comissao1   <br>
        Vendedor 2: {$_POST['nome2']} e seu total de Vendas do Mês foi: R$$vendas2 e sua comissão foi de R$$comissao2   <br>
        Vendedor 3: {$_POST['nome3']} e seu total de Vendas do Mês foi: R$$vendas3 e sua comissão foi de R$$comissao3   <br>
        </p>
    </div>
</div><p class='align-self-center mt-5'>Feito por João Faro</p>";
    }