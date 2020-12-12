<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ServicesWorld - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
</head>
<body style="width: auto;" class="bg-light">
    <?php
        include_once("topoPadrao.php");
    ?>
    
    <!--Banner-->
    <div id="banner" class="mt-5">
        <img src="../img/photo-1-serv.jpg" style="width: 100%;" alt="">
    </div> 

    <!--Conteudo entra aqui-->
    <div class="container pt-2" >

        <h2 class="display-4 pt-4">Confira abaixo</h2><br>
    
        <?php
            if(!isset($_SESSION['listaServicos'])){
                header("Location:../controller/controllerServico.php?opcao=2");
            }
            $listaServicos = $_SESSION['listaServicos']; 
            foreach ($listaServicos as $serv) 
            { 
        ?>
                
        <table border="0" width="50%" cellspacing="5">
            <tr align="left">
                <td><strong><h3 class="style-4"><?php echo $serv->nome; ?></h3></strong></td>
            </tr>
            <tr>
                <td><h5>Valor: R$<?php echo $serv->valor; ?></h5></td>
            </tr>
            <tr>
                <td><h5>Descrição: <?php echo $serv->descricao; ?></h5></td>
            </tr>
            <!-- <tr>
                <td><h5>Prestador do serviço: <?php/* echo $serv->nomeCliente; */?></h5></td>
            </tr>
            <tr>
                <td><h5>Categoria: <?php /*echo $serv->nomeTipo;*/ ?></h5></td>
            </tr> -->
            <tr>
                <a href="">
                    <button class="btn btn-primary">Contratar</button>
                </a>
            </tr>
        </table> 
        <?php
            }
        ?>
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