<?php
    include "../view/(3)_salario.html";
    if (isset($_POST['submit'])) {
        $nome = $_POST['txtnome'];
        $cargo = $_POST['txtcargo'];
        $salario = $_POST['txtsalario'];
        $num_dependentes = $_POST['txtdependentes'];
        
        
        // Calculando o acréscimo para dependentes (5% por dependente)
        $acrescimo_dependentes = $salario * ($num_dependentes * 0.05);

        // Calculando o desconto do INSS (11% do salário)
        $desconto_inss = $salario * 0.11;

        // Calculando o valor líquido do salário (salário inicial - INSS + acréscimo dos dependentes)
        $salario_liquido = $salario - $desconto_inss + $acrescimo_dependentes;

        // Exibindo o holerite do funcionário

        echo
        "<div class='card bg-light position-absolute top-100 start-50 translate-middle' style='width: 18rem'>
            <br>
            <div class='card-body'>
                <p class='card-text text-dark'>
                HOLERITE DO FUNCIONÁRIO:<br>
                Nome: $nome<br>
                Cargo: $cargo<br>
                Valor bruto de salário: R$ $salario<br>
                Valor de desconto de INSS: R$ $desconto_inss<br>
                Valor de acréscimo para os dependentes: R$ $acrescimo_dependentes<br>
                Valor líquido a receber: R$ $salario_liquido<br>
                </p>
            </div>
            <br>
        </div>
        
        ";
    }

?>
