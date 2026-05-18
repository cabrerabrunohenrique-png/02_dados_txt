<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container text-center" style="border: 1px solid red;"  >
        <h1 class="text-primary">castro de album</h1>
        <form action="albumCadastro.php" method ="post">
            <label for="">Artista</label>
            <input type="text" name = "artista">
            <br>
            <label for="">nome do álbum</label>
            <input type="text" name = "nomeAlbum">
            <br>
            <label for="">ano de lancamento</label>
            <input type="text" name ="anoLancamento">
            <br>
           
            <button type="submit">enviar</button>
            <button type="submit">limpar</button>
        </form>
        
    </div>
    <hr>
    <br>
    <h2> listagem de albus</h2>

    <?php

    //Aqui estou criando uma variavel, pois eu irei chamar ele mais de 1x
    $arquivo = "AlbumCadastro_bd.txt";

    //aqui eu estou usando o comando ABRIR para "FOPEN". Dentro do comando eu coloco o tipo
    //nesse caso sera o R de "read"
    $arquivo_aberto = fopen($arquivo,"r");

    //aqui eu estou usando o comando de LER para FREAD. Dentro do comando eu preciso colocar o nome do arquivo e o tamanho
    //  eu coloco outro comando
    // filesize vai mostrar o tamanho do aquivo
    $conteudo = fread($arquivo_aberto,filesize($arquivo));
    echo $conteudo;
    
    //fechar o que foi aberto
    fclose($arquivo_aberto);

    ?>

<br>
<br>

<h1> listagem de albus</h1>

    <?php

    $arquivo1 = fopen("AlbumCadastro_bd.txt","r");

    //comando padrao
           //codigo para contar "linha" no bloco de nota.
    while(!feof($arquivo1)){

        $linha = fgets($arquivo1);
        echo "$linha <br>";
    

    }
    fclose($arquivo1);

    



    ?>
    
</body>
</html>