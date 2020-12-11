<?php
    session_start();
    if(!isset($_SESSION["tipos"])){
        header("Location:../controller/controllerServico.php?opcao=6");
    }

    $tipos = $_SESSION["tipos"];
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Sign up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
        
        <!-- AQUI MAYCON -->
        <script>
            function addData(){
                tabela = document.getElementById("tabela-datas");
                data = document.getElementById("data");
                tr = createElement("tr");
                tr.innerHTML("<td>"+data.value()+"</td>");
                tabela.appendChild();
            }
        </script>

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
            <h2 class="my-3">Cadastro de Serviço</h2><br>
            <form action="../controller/controllerServico.php" method="POST">
                <input type="hidden" name="opcao" value="1">
                <div class="form-group col-6">
                  <label for="">Nome do serviço</label>
                  <input class="form-control" type="text" placeholder="Digite o serviço" name="nome">
                </div>
                <div class="form-group col-6">
                  <label for="">Descrição</label>
                  <input class="form-control" type="text" placeholder="Digite a descrição" name="descricao">
                </div>
                <div class="form-group col-6">
                  <label for="">Valor</label>
                  <input class="form-control" type="text" placeholder="Digite o valor" name="valor">
                </div>
                <div class="form-group col-6 align-self-center">
                  <label for="">Tipo</label>
                  <!-- <input class="form-control" type="text" placeholder="Digite o tipo" name="idTipo"> -->
                  <select name="tipo" id="">
                    <?php 
                        foreach($tipos as $tipo){
                            echo '<option value="'.$tipo->idTipo.'">'.$tipo->nome.'</option>';
                        }
                    ?>
                  </select>
                </div>

                <div class="form-group col-6">
                  <label for="">Data oferta</label>
                  <input class="form-control" type="date" name="data" id="data">
                </div>

                <div class="form-group col-6">
                    <buttom class="btn btn-success" onClick="Funcao()">Adicionar data</buttom>
                </div>

                <div class="form-group col-6">
                    <table border="1" id="tabela-datas">
                        <tr>
                            <th>Datas adicionadas</th>
                        </tr>
                    </table>
                </div>
                <div class="form-group col-6">
                    <input class="btn btn-success" type="submit" value="Cadastrar">
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