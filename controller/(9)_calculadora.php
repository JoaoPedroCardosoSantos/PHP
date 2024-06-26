<?php
 include "../view/(9)_calculadora.html";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST['txtvalor1']);
        $num2 = floatval($_POST['txtvalor2']);
        $num3 = floatval($_POST['txtvalor3']);

        $soma = $num1 + $num2 + $num3;
        

        $subtracao = $soma - ($num1 + $num2 + $num3);

        $multiplicacao = ($num1 * $num2 * $num3) * $subtracao;

        $quantidade_numeros = 3;
        $divisao = $multiplicacao / $quantidade_numeros;
        echo
        "<div class='card mt-4 bg-light' style='width: 18rem'>
            <div class='card-body'>
                <p class='card-text text-dark'>
                Soma dos números: $num1 + $num2 + $num3 = $soma <br>
                Subtração da soma pelos números: $soma - ($num1 + $num2 + $num3) = $subtracao <br>
                Multiplicação dos números pela subtração: ($num1 * $num2 * $num3) * $subtracao = $multiplicacao <br>
                Divisão da multiplicação pela quantidade de números: $multiplicacao / $quantidade_numeros = $divisao <br>
                </p>
            </div>
        </div><p class='align-self-center mt-5'>Feito por João Faro</p>";
    };
    