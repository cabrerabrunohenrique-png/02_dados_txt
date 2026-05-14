<?php 
$artista = $_POST["artista"];
$nomeAlbum = $_POST["nomeAlbum"];
$anoLancamento = $_POST["anoLancamento"];


//esse comando serve para criar um arquivo em TXT.
// o "A" é a configuracao para receber sem apagar
$arquivo = fopen("cadastroAlbum_bd.txt","a");
//Aqui serve para configurar como sera escrito no arquivo
fwrite($arquivo,"$artista;$nomeAlbum;$anoLancamento \n" );

//aqui ele vai fechar o comando, sempre que abre tem que fechar
fclose($arquivo);

echo"$artista, $nomeAlbum, $anoLancamento";



?>