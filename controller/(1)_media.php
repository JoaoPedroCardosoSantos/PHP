<?php
include "../view/(1)_media.html";
if (isset($_POST['submit'])) {
$disciplina1 = $_POST['txtdisciplina1'];
$aluno = $_POST['txtaluno'];
$n1 = $_POST['txtnota1'];
$n2 = $_POST['txtnota2'];
$n3 = $_POST['txtnota3'];
$disciplina2 = $_POST['txtdisciplina2'];
$n4 = $_POST['txtnota4'];
$n5 = $_POST['txtnota5'];
$n6 = $_POST['txtnota6'];
$disciplina3 = $_POST['txtdisciplina3'];
$n7 = $_POST['txtnota7'];
$n8 = $_POST['txtnota8'];
$n9 = $_POST['txtnota9'];

$media1 = ($n1 + $n2 + $n3) / 3;
$media2 = ($n4 + $n5 + $n6) / 3;
$media3 = ($n7 + $n8 + $n9) / 3;

echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";

echo
"<div class='card bg-light position-absolute top-150 start-50 translate-middle' style='width: 18rem; margin-top: 200px;'>
    <br>
    <div class='card-body'>
        <p class='card-text text-dark'>
        Nome do aluno: $aluno<br>
        Disciplina: $disciplina1<br>
        Notas: $n1, $n2, $n3<br>
        Média da disciplina: $media1<br>
        Disciplina: $disciplina2<br>
        Notas: $n4, $n5, $n6<br>
        Média da disciplina: $media2<br>
        Disciplina: $disciplina3<br>
        Notas: $n7, $n8, $n9<br>
        Média da disciplina: $media3<br>
        </p>
    </div>
</div>";
}
?>