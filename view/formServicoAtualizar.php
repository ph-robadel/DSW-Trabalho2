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
        <form action="../controller/controllerServico.php" >
        <input type="hidden" size="3" name="opcao" value="5">
       
            <label> Nome: </label><input type="text" name="nome" value="<?php echo $servico->nome ?>"><br><br>
            <label> Valor </label><input type="text" name="rg" value="<?php echo $servico->valor ?>"><br><br>
            <label> Descrição: </label><input type="text" name="dataNascimento" value=" <?php echo  $servico->descricao ?>"><br><br>
            
           
            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
            <br><br> 
        </form>
    </center>
    </body>
</html>

