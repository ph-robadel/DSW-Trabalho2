<?php
 function formatarData($data) {
    return date('d/m/Y', $data);
}
session_start();
$cliente = $_SESSION['cliente'];
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Dados Cadastrais</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     

    </head>
    <body style="width: auto;" class="bg-light">
        <?php 
            require_once("topoPadrao.php");
        ?>
        
        <!--Banner-->
        <div id="banner">
            <img src="../img/photo-3.jpg" style="width: 100%;" alt="">
        </div> 

        <!--Content-->
        <div class="container pt-2">
            <h2 class="my-3">Meus dados</h2><br>
            <form action="../controller/controllerCliente.php" method="POST">
                <input type="hidden" name="opcao" value="5">
                <div class="form-group col-6">
                  <label for="">Nome completo</label>
                  <input class="form-control" type="text"  name="nome" value="<?php echo $cliente->nome ?>">
                </div>
                <div class="form-group col-6">
                  <label for="">CPF</label>
                  <input class="form-control" type="text" name="cpf"  value="<?php echo $cliente->cpf ?>">
                </div>
                <div class="form-group col-6">
                  <label for="">Data de Nascimento</label>
                  <input class="form-control" type="date" name="dataNascimento" value="<?php echo $cliente->dtNascimento ?>">
                </div>
                <div class="form-group col-6">
                  <label for="">Email</label>
                  <input class="form-control" type="text" name="email"  placeholder="<?php echo $cliente->email ?>">
                </div>
                <div class="form-group col-6">
                  <label for="">Telefone</label>
                  <input class="form-control" type="text" name="telefone"  value="<?php echo $cliente->telefone ?>">
                </div>
                <div class="form-group col-6">
                  <label for="">Endereço</label>
                  <input class="form-control" type="text" name="endereco"  value="<?php echo $cliente->endereco ?>">
                </div>
                <div class="form-group col-6">
                  <label for="">Cadatre sua senha</label>
                  <input class="form-control" type="password" name="senha"  value="<?php echo $cliente->senha ?>">
                </div>
                <div class="form-group col-6">
                    <input class="btn btn-success" type="submit" value="Enviar">
                </div>
            </form>
            
        </div>

        <!--Rodape-->
        <div id="rodape" class="footer">
            <div>
                <br>
                <p class="footer">Trabalho II de Desenvolvimento Web - Universidade Federal do Espírito Santo</p>
                <p id="rdpAut">Desenvolvido por Maycon, Pedro Henrique e Valquiria</p>
            </div>
        </div>
    </body>    
        <!--Option 2: jQuery, Popper.js, and Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </html>


}