<?php

$nome_aluno = $_POST["nome_aluno"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

echo "A média do aluno ".$nome_aluno." é: ".(($nota1 + $nota2)/2);

?>