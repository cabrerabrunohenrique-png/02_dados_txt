<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="" style="border: 1px solid red;"  >
        <h1 class="">cadastro de aluno</h1>
        <form action="alunoCadastro.php" method ="post">
            <label for="">ra</label>
            <input type="text" name = "ra">
            <br>
            <label for="">nome</label>
            <input type="text" name = "nome">
            <br>
            <label for="">idade</label>
            <input type="number" name ="idade">
            <br>
           
            <button type="submit">enviar</button>
            <button type="submit">limpar</button>
        </form>


    </div>
    
</body>
</html>