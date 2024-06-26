 <?php
 include "../view/(8)bonus.html";
 if(isset($_POST['submit'])){
        
        $totalvendas = floatval($_POST['totalvendas']);
        $totalvendedores = floatval($_POST['totalvendedores']);

        // Calcula o custo de produção (40% do total de vendas)
        $custo_producao = $totalvendas * 0.4;

        // Calcula o lucro (60% do total de vendas)
        $lucro = $totalvendas * 0.6;

        // Calcula a participação dos funcionários (10% do lucro)
        $participacao = $lucro * 0.1;

        // Calcula o bônus (4% do lucro)
        $bonus = $lucro * 0.04;

        // Calcula o valor total a ser distribuído entre os funcionários (participação + bônus)
        $total_distribuido = $participacao + $bonus;

        // Calcula o valor pago a cada funcionário
        $valor_por_funcionario = $total_distribuido / $totalvendedores;

        // Exibe os resultados na tela
    
    echo
    "<div class='card mt-4 bg-light ' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
        Total do custo de produção: R$$custo_producao   <br>
        Total do lucro: R$$lucro   <br>
        Valor total de participação distribuído aos funcionários: R$$participacao  <br>
        Valor total do bônus: R$$bonus <br>
        Valor pago a cada um dos funcionários: R$$valor_por_funcionario <br>
        </p>
    </div>
    </div><p class='align-self-end align-self-center mt-5'>Feito por João Faro</p>";
        }
    