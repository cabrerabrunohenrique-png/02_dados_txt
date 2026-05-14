<?php
$nomePaciente = $_POST["nomePaciente"];
$telefonePaciente = $_POST["telefonePaciente"];
$cidadePaciente = $_POST["cidadePaciente"];
$estado = $_POST["estado"];
$casado = $_POST["casado"];
$necessidadeTrabalho = $_POST["necessidadeTrabalho"];


$arquivo = fopen("pacienteCadastro_bd.txt","a");
//Aqui serve para configurar como sera escrito no arquivo
fwrite($arquivo,"$nomePaciente, $telefonePaciente, $cidadePaciente, $estado, $casado, $necessidadeTrabalho \n");

//aqui ele vai fechar o comando, sempre que abre tem que fechar
fclose($arquivo);

echo"$nomePaciente,$telefonePaciente;$cidadePaciente;$estado; $necessidadeTrabalho";

?>