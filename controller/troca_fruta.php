<?php

include "../view/(5)troca_fruta.html";

/* O sistema deve receber 03 nomes de pessoas, e o nome das frutas 
que cada uma das pessoas mais gosta. Ao final deve exibir os nomes 
e as frutas trocadas. 

a.A troca das frutas deve ocorrer na variável e não apenas na exibição em tela. */

$nome1 = $_POST['nome1'];
$nome2 = $_POST['nome2'];
$nome3 = $_POST['nome3'];
$fruta1 = $_POST['fruta1'];
$fruta2 = $_POST['fruta2'];
$fruta3 = $_POST['fruta3'];

$tempFruta1 = $fruta1;
$fruta1 = $fruta2;
$fruta2 = $fruta3;
$fruta3 = $fruta1;

echo
"<div class='card mt-4 bg-light ' style='width: 18rem'>
<div class='card-body'>
    <p class='card-text text-dark'>
    Pessoa 1: $nome1, e sua fruta favorita é $fruta1
    Pessoa 2: $nome2, e sua fruta favorita é $fruta2
    Pessoa 3: $nome3, e sua fruta favorita é $fruta3
    </p>
</div>
</div>
<p class='align-self-end align-self-center mt-5'>Feito por Augusto Akira Miasato</p>";

