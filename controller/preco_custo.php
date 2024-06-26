<?php
    include "../view/(4)preco_custo.html";
    
    $nomeProduto = $_POST['txtnome'];
    $valorProducao = (float)$_POST['txtvalor'];
    $valorEmbalagem = (float)$_POST['txtembalagem'];
    $lucro = (float)$_POST['txtlucro'];

    $taxaEntrega = 12.00;
    $precoCusto = $valorProducao + $valorEmbalagem + $taxaEntrega;
    $lucro = $precoCusto * ($lucro / 100);
    $precoVenda = $precoCusto + $lucro;

    echo "
    <div class='card mt-4 bg-light ' style='width: 18rem'>
        <div class='card-body'>
            <p class='card-text text-dark'>
            Nome do Produto: $nomeProduto
            Valor Produção: R$ $valorProducao
            Taxa de Entrega: R$ $taxaEntrega
            Valor da Embalagem: R$ $valorEmbalagem
            Preço Lucro: R$ $lucro
            </p>
        </div>
    </div>
    <p class='align-self-end align-self-center mt-5'>Feito por Augusto Akira Miasato</p>";