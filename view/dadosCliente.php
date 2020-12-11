<?php
  session_start();
  if(!isset($_SESSION["login-cliente"])){
    header("Location:../view/login.php");
  }

  $cliente = $_SESSION['login-cliente'];

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
            <div class="form-group col-6">
              <label for="">Nome completo</label>
              <input class="form-control" type="text" value="<?php echo $cliente->nome?>" readonly>
            </div>
            <div class="form-group col-6">
              <label for="">CPF</label>
              <input class="form-control" type="text" value="<?php echo $cliente->cpf?>" readonly>
            </div>
            <div class="form-group col-6">
              <label for="">Data de Nascimento</label>
              <input class="form-control" type="date" value="<?php echo $cliente->dtNascimento ?>" readonly>
            </div>
            <div class="form-group col-6">
              <label for="">Email</label>
              <input class="form-control" type="text" value="<?php echo $cliente->email?>" readonly>
            </div>
            <div class="form-group col-6">
              <label for="">Telefone</label>
              <input class="form-control" type="text" value="<?php echo $cliente->telefone?>" readonly>
            </div>
            <div class="form-group col-6">
              <label for="">Endereço</label>
              <input class="form-control" type="text" value="<?php echo $cliente->endereco?>" readonly>
            </div>
            <div class="form-group col-6">
              <label for="">Senha</label>
              <input class="form-control" type="password" name="senha" value="<?php echo $cliente->senha?>" readonly>
            </div>
            <!--Botão de Edição que leva pra atualização dos dados do cliente da sessão-->
            <div class="form-group col-6">
                <a href="formClienteAtualizar.php"><button class="btn btn-success">Editar dados</button></a>
            </div>
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