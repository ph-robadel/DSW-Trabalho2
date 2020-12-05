
<html>
    <head>
        <title>Cadastrar Tipo</title>
    </head>
    <body>
    <center>
        <br>
        <label><b> CADASTRAR TIPO</b></label>

        <form action="../controller/controllerTipo.php" method="request">
        <input type="hidden" name="opcao" value="1">

            <label> Nome: </label><input type="text" name="nome"><br><br>
            <label> Valor: </label><input type="text" name="valor"><br><br>
                      
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            
            <br><br> 
        </form>
    </center>
    </body>
</html>
