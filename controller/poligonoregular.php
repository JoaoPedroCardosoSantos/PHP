<?php
    include "../view/(5)_poligono.html";
    
    $JoaoF = $_POST['txtquantidade'];
    $valorLado = $_POST['txtlado'];


    if ($JoaoF == 3) {
        $mensagem = "e sua área é";
        $area = $valorLado*$valorLado/2;
        echo "<img src=../assets/images/triangulo.png width=200 height=200>";
        $tipoPoligono = "Você tem um triângulo";
    } if($JoaoF == 4) {
        $mensagem = "e sua área é";
        $area = $valorLado*$valorLado;
        echo "<img src=../assets/images/quadrado.png width=200 height=200>";
        $tipoPoligono = "Você tem um quadrado";
    } if ($JoaoF == 5) {
        $mensagem = "e sua área é";
        $apótema = $valorLado / (2 * tan(pi() / 5));
        $area = (($valorLado*5) * $apótema) / 2;
        echo "<img src=../assets/images/pentagono.png width=200 height=200>";
        $tipoPoligono = "Você tem um pentágono";
    } if ($JoaoF >= 6) {
        $area = "";
        $mensagem = "";
        $tipoPoligono = "Polígono não identificado";
    } if ($JoaoF <= 2){
        $area = "";
        $mensagem = "";
        $tipoPoligono = "Não é um polígono";
    }
    
    echo "
    <div class='card mt-4 bg-light ' style='width: 18rem'>
        <div class='card-body'>
            <p class='card-text text-dark'>
            $tipoPoligono $mensagem $area
            </p>
        </div>
    </div>
    <p class='align-self-end align-self-center mt-5'>Feito por João Faro</p>";