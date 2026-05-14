<?php 
$nomeCompleto = $_POST["nomeCompleto"];
$numeroRegistro = $_POST["numeroRegistro"];
$nivelPemisao = $_POST["nivelPemisao"];
$nomerUsuario = $_POST["nomeUsuario"];
$senhaAcesso = $_POST["senhaAcesso"];
$confirmaSenha = $_POST["confirmaAcesso"];

//esse comando serve para criar um arquivo em TXT.
// o "A" é a configuracao para receber sem apagar
$arquivo = fopen("usuarioCadastro_bd.txt","a");
//Aqui serve para configurar como sera escrito no arquivo
fwrite($arquivo,"$nomeCompleto \t $nivelPemisao" );

//aqui ele vai fechar o comando, sempre que abre tem que fechar
fclose($arquivo);


echo "$nomeCompleto<br>$numeroRegistro<br>$nivelPemisao<br>
$nomerUsuario<br>$senhaAcesso<br>$senhaAcesso<br>";

?>