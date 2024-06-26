<?php
include "../view/(10)conversaohoras.html";
    if (isset($_POST['submit'])) {
        $horas = intval($_POST['horas']);
        $min= intval($_POST['min']);
        $seg = intval($_POST['seg']);

    if ($min < 0 || $min > 59) {
        echo "<p class='text-danger'>Os minutos devem estar entre 0 e 59.</p>";
        exit();
    }

    if ($seg < 0 || $seg > 59) {
        echo "<p class='text-danger'>Os segundos devem estar entre 0 e 59.</p>";
        exit();
    }

        $seg1 = $horas * 60 * 60;
        $seg2 = $min * 60;
        

        $totalseg= $seg + $seg1 + $seg2;


        echo
"<div class='card mt-4 bg-light ' style='width: 18rem'>
<div class='card-body'>
    <p class='card-text text-dark'>
    $horas horas deram $seg1 segundos <br>
    $min minutos deram $seg2 segundos <br>
    Logo a hora $horas h$min m$seg s deram ao todo $totalseg segundos <br>
    </p>
</div><p class='align-self-end align-self-center mt-5'>Feito por João Faro</p>
";
    }