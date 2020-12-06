<?php

    function formatarData($data) {
        return date('d/m/Y', $data);
    }
    
    session_start();
    $cliente = $_SESSION['cliente'];

    
?>
<html>
    <head>
        <title>Editar Cliente</title>
    </head>
    <body>
    <center>
        <br>
        <h2>Alteração de Clientes</h2>
        <form action="../controller/controllerCliente.php" >
        <input type="hidden" size="3" name="opcao" value="5">
            <label> Codigo: </label><input type="text" name="codCliente" value="<?php echo $cliente->codCliente ?>" readonly><br><br>
            <label> Nome: </label><input type="text" name="nome" value="<?php echo $cliente->nome ?>"><br><br>
            <label> Endereço: </label><input type="text" name="endereco" value="<?php echo $cliente->endereco ?>"><br><br>
            <label> Telefone: </label><input type="text" name="telefone" value=" <?php echo  $cliente->telefone ?>"><br><br>
            <label> Cpf: </label><input type="text" name="cpf" value="<?php echo $cliente->cpf ?>"><br><br>
            <label> Data Nascimento: </label><input type="dataNascimento" name="senha" value="<?php echo formatarData(strtotime($cliente->dataNascimento)) ?>"><br><br>
            <label> Email: </label><input type="text" name="email" value="<?php echo $cliente->email ?>"><br><br>
            <label> Senha: </label><input type="text" name="senha" value="<?php echo $cliente->senha ?>"><br><br>
           
            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
            <br><br> 
        </form>
    </center>
    </body>
</html>

