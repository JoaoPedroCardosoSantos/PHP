<?php
    include "../view/(6)_triangulo.html";
    
    $JoaoF = $_POST['txtlado1'];
    $valor2 = $_POST['txtlado2'];
    $valor3 = $_POST['txtlado3'];

    if ($JoaoF == $valor2 && $JoaoF == $valor3) {
        echo "<img src=../assets/images/triangulo.png width=200 height=200>  O triângulo é equilátero.";
    }
    elseif ($JoaoF == $valor2 || $JoaoF == $valor3 || $valor2 == $valor3) {
        echo "<img src=../assets/images/trianguloisosceles.png width=170 height=200> <p>O triângulo é isósceles.</p>";
    }
    else {
        echo "<img src=../assets/images/trianguloescaleno.png width=150 height=200> O triângulo é escaleno.";
    }
    
    echo "<p class='align-self-end align-self-center mt-5'>Feito por João Faro</p>";