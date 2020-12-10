
<html>
    <head>
        <title>Cadastrar Cliente</title>
    </head>
    <body>
    <center>
        <br>
        <label><b> CADASTRAR CLIENTE </b></label>

        <form action="../controller/controllerCliente.php" method="request">
        <input type="hidden" name="opcao" value="1">
            <label> Nome: </label><input type="text" name="nome"><br><br>
            <label> Endereço: </label><input type="text" name="endereco"><br><br>
            <label> Telefone: </label><input type="text" name="telefone"><br><br>
            <label> Cpf: </label><input type="text" name="cpf"><br><br>
            <label> Data de nascimento: </label><input type="text" name="dataNascimento"><br><br>
            <label> Email: </label><input type="text" name="email"><br><br>
            <label> Senha: </label><input type="text" name="senha"><br><br>
            
            
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            
            <br><br> 
        </form>
    </center>
    </body>
</html>
