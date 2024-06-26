<?php
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

echo "Nome do aluno: $aluno<br><br>";
echo "Disciplina: $disciplina1<br>";
echo "Notas: $n1, $n2, $n3<br>";
echo "Média das disciplinas: $media1<br><br>";
echo "Disciplina: $disciplina2<br>";
echo "Notas: $n4, $n5, $n6<br><br>";
echo "Média das disciplinas: $media2<br><br>";
echo "Disciplina: $disciplina3<br>";
echo "Notas: $n7, $n8, $n9<br><br>";
echo "Média das disciplinas: $media3<br><br>";