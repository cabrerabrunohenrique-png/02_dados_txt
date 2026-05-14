<?php
$nome = $_POST["nome"];
$tipo = $_POST["tipo"]; 
$ano = $_POST["ano"];

//esse comando serve para criar um arquivo em TXT.
// o "A" é a configuracao para receber sem apagar
$arquivo = fopen("eventoCadastro_bd.txt","a");
//Aqui serve para configurar como sera escrito no arquivo
fwrite($arquivo,"$nome;$tipo;$ano\n" );

//aqui ele vai fechar o comando, sempre que abre tem que fechar
fclose($arquivo);

echo"$nome, $tipo, $ano";

?>