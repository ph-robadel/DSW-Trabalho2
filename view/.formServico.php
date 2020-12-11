
<html>
    <head>
        <title>Cadastrar Servico</title>
    </head>
    <body>
    <center>
        <br>
        <label><b> CADASTRAR SERVIÇO </b></label>

        <form action="../controller/controllerServico.php" method="request">
        <input type="hidden" name="opcao" value="1">
            <label> Nome: </label><input type="text" name="nome"><br><br>
            <label> Valor: </label><input type="text" name="valor"><br><br>
            <label> Descrição: </label><input type="text" name="descricao"><br><br>
            <label> Tipo: </label><input type="text" name="tipo"><br><br>
          
            
            
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            
            <br><br> 
        </form>
    </center>
    </body>
</html>
