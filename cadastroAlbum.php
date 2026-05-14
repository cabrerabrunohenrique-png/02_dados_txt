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
    
</body>
</html>