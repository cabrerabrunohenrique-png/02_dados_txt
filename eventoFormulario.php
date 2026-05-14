<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container text-center" style="border: 1px solid red;"  >
        <h1 class="text-primary">nome evento</h1>
        <form action="eventoCadastro.php" method ="post">
            <label for="">nome</label>
            <input type="text" name = "nome">
            <br>
            <label for="">tipo</label>
            <select name="tipo" id="">
                <option value="primeiro">Primeiro</option>
                <option value="segundo">Segundo</option>
                <option value="Terceiro">Terceiro</option>
            </select>
            <br>
            <label for="">ano</label>
            <input type="date" name ="ano">
            <br>
           
            <button type="submit">enviar</button>
            <button type="submit">limpar</button>
        </form>


    </div>
    
</body>
</html>