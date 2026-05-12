<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div style ="border: 2px solid black;" >
        <h1>Cadastro Novo Usuário</h1>
        <form action="cadastro.php" method ="post">
            <label for="">Nome Completo</label>
            <input type="text" name = "nomeCompleto">
            <br>
            <label for="">Numero de Registro</label>
            <input type="text" name = "numeroRegistro">
            <br>
            <label for="">Nivel de Permissao</label>
            <select name="nivelPermissao" id="">
                <option value="primeiro">Primeiro</option>
                <option value="segundo">Segundo</option>
                <option value="Terceiro">Terceiro</option>
            </select>
            <br>
            <label for="">Nome Usuário</label>
            <input type="text" name = "nomeUsuario">
            <br>
            <label for="">Senha de acesso</label>
            <input type="password" name = "senhaAcesso">
            <br>
            <label for="">Confirma sennha</label>
            <input type="passwo rd" name = "confirmaAcesso">
            <br>
            <button type="submit">Enviar</button>
        </form>


    </div>

</body>
</html>