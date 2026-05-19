<?php
$ra = $_POST["ra"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];          


$arquivo = fopen("alunoCadastro_bd.txt","a");
fwrite($arquivo, "$ra, $nome, $idade \n");
fclose($arquivo);


header('location: alunoFormulario.php');

echo "$ra $nome $idade";


?>