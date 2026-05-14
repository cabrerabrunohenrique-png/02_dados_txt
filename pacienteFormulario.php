<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulariopaciente</title>
</head>
<body>
    <h1 class="text-primary">Cadastro Paciente</h1>
        <form action="pacienteCadastro.php" method ="post">
            <label for="">nomePaciente</label>
            <input type="text" name = "nomePaciente">
            <br>
            <label for="">Telefone Paciente</label>
            <input type="text" name = "telefonePaciente">
            <br>
            <label for="">Cidade Paciente</label>
            <input type="text" name = "cidadePaciente">
            <br>


            <label for="">Estado</label>
            <select name="estado" id="">
                <option value="acre">acre</option>
                <option value="amozonas">amozonas</option>
                <option value="bahia">bahia</option>
                <option value="ceare">ceare</option>
                <option value="sergipe">sergipe</option>
                <option value="pernambuco">pernambuco</option>
                <option value="alogoas">alogoas</option>
                <option value="sao paulo">sao paulo</option>
                <option value="mato grosso do sul">mato grosso do sul</option>
                <option value="mato grosso do norte">mato grosso do norte</option>
                <option value="parana">parana</option>
                <option value="para">para</option>
                <option value="rio de janeiro">rio de janeiro</option>
                <option value="rio grande do sul">rio grande do sul</option>
                <option value="rio grande do norte">rio grande do norte</option>
                <option value="espirito santos">espirito santos</option>
                <option value="minas gerais">minas gerais</option>
                <option value="roraima">roraima</option>
                <option value="tocantins">tocantins</option>
                <option value="brasilia">brasilia</option>
                <option value="goiana">goiana</option>
                <option value="goias">goias</option>
                <option value="piau">piau</option>
                <option value="maranha">maranha</option>
                <option value="amapa">amapa</option>
                <option value="segundo">segundo</option>
                <option value="rodonia">rodonia</option>
            </select>
            <br>
            <label for="">casado</label>
            <input type="radio" name ="casado" value="sim">
            <input type="radio" name ="casado" value ="nao">
            <br>

            <label for="">necessidade de adaptacoes para o trabalho</label>
            <input type="radio" name ="necessidadeTrabalho" value="sim">
            <input type="radio" name ="necessidadeTrabalho" value="nao">
            <br>    
           
            <button type="submit">enviar</button>
            <button type="submit">limpar</button>
        </form>
    
</body>
</html>